<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
// use \Illuminate\Session\SessionManager;
// use \Illuminate\Session\Store;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layouts.front', function ($view){

            $cart = Order::find(session('order_id'));

            $view->with('categories', Category::WithTranslation()
            ->translatedIn(app()->getLocale())
            ->get())->with('cart', $cart);
        
        });
    }
}
