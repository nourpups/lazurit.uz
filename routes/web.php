<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
   'middleware' => [
      'auth',
      'user.admin'
   ],
   'prefix' => 'manager'
],
   function (
   )
   {
       Route::get('/',
          [
             ManagerController::class,
             'index'
          ])->name('manager');
       Route::get('/users',
          [
             ManagerController::class,
             'users'
          ])->name('users');
       Route::get('/orders',
          [
             ManagerController::class,
             'orders'
          ])->name('orders');
       Route::get('/products',
          [
             ManagerController::class,
             'products'
          ])->name('products');
       Route::get('/categories',
          [
             ManagerController::class,
             'categories'
          ])->name('categories');
       Route::post('/products/store',
          [
             ProductController::class,
             'store'
          ])->name('product.store');
       Route::put('/products/update/{product}',
          [
             ProductController::class,
             'update'
          ])->name('product.update');
       Route::get('/products/edit/{product}',
          [
             ProductController::class,
             'edit'
          ])->name('product.edit');
       Route::delete('/products/delete/{product}',
          [
             ProductController::class,
             'delete'
          ])->name('product.delete');
       Route::post('/categories/store',
          [
             CategoryController::class,
             'store'
          ])->name('category.store');
       Route::get('/categories/edit/{category}',
          [
             CategoryController::class,
             'edit'
          ])->name('category.edit');
       Route::put('/categories/update/{category}',
          [
             CategoryController::class,
             'update'
          ])->name('category.update');
       Route::delete('/categories/delete/{category}',
          [
             CategoryController::class,
             'delete'
          ])->name('category.delete');
       Route::delete('/users/delete/{user}',
          [
             UserController::class,
             'delete'
          ])->name('user.delete');
       Route::get('/users/make-admin/{user}',
          [
             UserController::class,
             'make_admin'
          ])->name('user.make_admin');
   });
// AUTH ROUTES *************************************************************************
Route::controller(LoginController::class)->group(function (
)
{
    Route::get('/login',
       'login_form')->name('login');
    Route::post('/login',
       'login');
    Route::get('/logout',
       'logout')->name('get.logout');
});
Route::controller(RegisterController::class)->group(function (
)
{
    Route::get('/register',
       'register_form')->name('register');
    Route::post('/register',
       'register');
});
// SEARCH ROUTES *************************************************************************
Route::get('/search',
   [
      SearchController::class,
      'search'
   ])->name('search');
// CART ROUTES *************************************************************************
Route::controller(CartController::class)->group(function (
)
{
    // all Route::post to Route::get i vse zarabotaet
    Route::get('/cart',
       'cart')->name('cart')->middleware('cart.empty');
    Route::get('/cart/add/{product}',
       'add')->name('add_to_cart');
    Route::get('/cart/edit_count',
       'edit_count')->name('cart.edit_count');
    Route::delete('/delete',
       'delete')->name('cart.delete');
    Route::get('/cart/confirm',
       'confirm')->name('cart.confirm');
    Route::get('/cart/empty',
       'empty')->name('cart.empty');
});
Route::view('/about',
   'landing.about')->name('about');
Route::view('/contact',
   'landing.contact')->name('contact');
//  FRONT END ROUTES ****************************************************************************
Route::controller(FrontController::class)->group(function (
)
{
    Route::get('/',
       'home')->name('home');
    Route::get('/catalog/{category:slug}',
       'catalog')->name('catalog');
    Route::get('/catalog/{category:slug}/product/{product}',
       'product')->name('product');
    Route::get('/{locale}',
       'change_lang')->name('language');
});
// MANAGER PANEL ROUTES *************************************************************************

