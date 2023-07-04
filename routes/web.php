<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// AUTH ROUTES *************************************************************************
Route::controller(LoginController::class)->group(function ()
{
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout')->name('get.logout');
});
Route::controller(RegisterController::class)->group(function ()
{
    Route::get('/register', 'register_form')->name('register');
    Route::post('/register', 'register');
});

// MANAGER PANEL ROUTES *************************************************************************
Route::group(['middleware' => ['auth', 'authorize'], 'prefix' => 'manager'],
    function ()
    {
        Route::get('/', [ManagerController::class, 'index'])->name('manager.index');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/make-admin/{user}', [UserController::class, 'makeAdmin'])->name('user.make_admin');
        Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('user.delete');

        Route::get('/orders', [OrderController::class, 'index'])->name('orders');

       Route::resources([
           'categories' => CategoryController::class,
           'products'=> ProductController::class,

       ]);

    });

// SEARCH ROUTES *************************************************************************
Route::get('/search', [SearchController::class, 'search'])->name('search');

// CART ROUTES *************************************************************************
Route::controller(CartController::class)->group(function ()
{
    // all Route::post to Route::get i vse zarabotaet
    Route::get('/cart', 'cart')->name('cart')->middleware('cart.empty');
    Route::get('/cart/add/{product}', 'add')->name('cart.add');
    Route::get('/cart/edit_count', 'edit_count')->name('cart.edit_count');
    Route::delete('cart/delete', 'delete')->name('cart.delete');
    Route::get('/cart/confirm', 'confirm')->name('cart.confirm');
    Route::get('/cart/empty', 'empty')->name('cart.empty');
});
Route::view('/about', 'landing.about')->name('about');
Route::view('/contact', 'landing.contact')->name('contact');

//  FRONT END ROUTES ****************************************************************************

Route::controller(FrontController::class)->group(function ()
{
    Route::get('/', 'home')->name('home');
    Route::get('/catalog/{category:slug}', 'catalog')->name('catalog');
    Route::get('/catalog/{category:slug}/product/{product:art}', 'product')->name('product');
    Route::get('language/{locale}', 'changeLang')->name('language');
});
