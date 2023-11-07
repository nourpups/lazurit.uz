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
        $categories = Category::with('products')->withCount('products')->withTranslation()->translatedIn(app()->getLocale())->get();
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

        return view('manager.index', compact('totalProductsCount',
                                                 'categories',
                                                           'totalOrdersCount',
                                                           'totalUsersCount',
                                                           'totalCustomersCount',
                                                           'totalAdminsCount',
                                                           'todayOrdersCount',
                                                           'thisMonthOrdersCount',
                                                           'thisWeekOrdersCount'));
    }

}
