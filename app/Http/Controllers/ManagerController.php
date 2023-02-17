<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate('16');
        return view('manager.users')
            ->with('users', $users);
    }
    public function products()
    {
        $products = Product::latest()->paginate('16');
        $categories = Category::get();
        return view('manager.products')
        ->with('products', $products)
        ->with('categories', $categories);
    }
    public function categories()
    {
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
