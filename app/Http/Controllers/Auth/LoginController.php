<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Str;

use function __;
use function auth;
use function redirect;
use function response;
use function session;
use function url;
use function view;

class LoginController extends Controller
{


   public function loginForm()
   {
      if (!Str::contains(url()->previous(), ["register", "login"])) {
         session(['url_previous' => url()->previous()]);
      }

      return view('auth.login');
   }

   public function login(LoginRequest $request)
   {
       $data = $request->validated();

      $loginField = isset($data['phone']) ? 'phone' : 'name';
       $credentials = [
           $loginField => $data[$loginField],
           'password' => $data['password']
       ];

      if (auth()->attempt($credentials)) {
          session()->flash('login', __('You have logged in succesfully'));

          return $request->confirm_order
              ? response()->json(['redirectLink' => route('cart.confirm')])
              : response()->json(['redirectLink' => session('url_previous')]);
      }

       return response()->json([
         'errors' => [
            'name' => [__('auth.failed')]
         ]
      ], 422);
   }


   public function logout()
   {
      auth()->logout();
      return redirect()->back()->with('warning', __('You have logged out'));
   }
}
