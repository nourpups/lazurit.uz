<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;

class ManagerController extends
   Controller
{

    public function index()
    {
        $totalProductsCount = Product::count();
        $categories = Category::withTranslation()->translatedIn(app()->getLocale())->get();
        $totalOrdersCount = Order::count();
        $totalUsersCount = User::count();
        $totalCustomersCount = User::where('is_admin', 0)->count();
        $totalAdminsCount = User::where('is_admin', 1)->count();

        $todayOrdersCount = Order::whereDate('created_at', today())->count();

        $currentMonth = date('m');
        $thisMonthOrdersCount = Order::whereMonth('created_at', $currentMonth)->count();

        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $thisWeekOrdersCount = Order::where('status', '1')->whereBetween('created_at', [
           $startOfWeek,
           $endOfWeek
        ])->count();

//        dd(app()->getLocale());

        return view('manager.index', compact('totalProductsCount', 'categories', 'totalOrdersCount', 'totalUsersCount', 'totalCustomersCount', 'totalAdminsCount', 'todayOrdersCount', 'thisMonthOrdersCount', 'thisWeekOrdersCount'));
    }

    public function users()
    {
        $users = User::latest()->paginate('16');

        return view('manager.users', compact('users'));
    }

    public function products()
    {
        session()->put('previous_page', url()->full());

        $products = Product::latest()->paginate('16');
        $categories = Category::withTranslation()->translatedIn(app()->getLocale())->get();

        return view('manager.products', compact('products', 'categories'));
    }

    public function categories()
    {
        session()->put('previous_page', url()->full());
        $categories = Category::withTranslation()->translatedIn(app()->getLocale())->latest()->paginate('16');

        return view('manager.categories', compact('categories'));
    }

    public function orders()
    {
        $orders = Order::latest()->paginate('16');

        return view('manager.orders', compact('orders'));
    }

}
