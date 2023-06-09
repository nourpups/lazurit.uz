<?php

namespace App\Http\Controllers\Auth;

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
         session()->put('url_previous', url()->previous());
      }

      return view('auth.login');
   }

   public function login(LoginRequest $request)
   {
      $loginField = isset($request['phone']) ? 'phone' : 'name';

      if (auth()->attempt($request->only($loginField, 'password'))) {
         session()->flash('login', __('You have logged in succesfully'));
         return response()->json([
            'status' => true,
         ]);
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
