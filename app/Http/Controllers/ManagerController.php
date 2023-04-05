<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ManagerController extends Controller
{
  public function index()
  {
    $products_count = Product::count();
    $categories = Category::get();
    $orders_count = Order::count();
    $users_count = User::count();
    $customers_count = User::where('is_admin', 0)->count();
    $admins_count = User::where('is_admin', 1)->count();

    $today = date('Y-m-d');
    $today_orders = Order::whereDate('created_at', $today)->count();

    $this_month = date('m');
    $this_month_orders = Order::whereMonth('created_at', $this_month)->count();

    // не использовал $now так как методы startOfWeek() и endOfWeek() стирают дату и время установленный в $now.
    $start = Carbon::now()->startOfWeek();
    $end = Carbon::now()->endOfWeek();
    $this_week_orders = Order::where('status', '1')->whereBetween('created_at', [$start, $end])
    ->count();

    return view('manager.index')
    ->with('products_count', $products_count)
    ->with('categories', $categories)
    ->with('orders_count', $orders_count)
    ->with('users_count', $users_count)
    ->with('customers_count', $customers_count)
    ->with('admins_count', $admins_count)
    ->with('today_orders', $today_orders)
    ->with('this_week_orders', $this_week_orders)
    ->with('this_month_orders', $this_month_orders);
  }
    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate('16');
        return view('manager.users')
            ->with('users', $users);
    }
    public function products()
    {
      session()->put('previous_page', url()->full());
        $products = Product::latest()->paginate('2');
        $categories = Category::get();
        return view('manager.products')
            ->with('products', $products)
            ->with('categories', $categories);
    }
    public function categories()
    {
      session()->put('previous_page', url()->full());
        $categories = Category::latest()->paginate('16');
        return view('manager.categories')
            ->with('categories', $categories);
    }
    public function orders()
    {
        $orders = Order::where('status', 1)->orderBy('id', 'desc')->paginate('16');
        return view('manager.orders')
            ->with('orders', $orders);
    }
}
