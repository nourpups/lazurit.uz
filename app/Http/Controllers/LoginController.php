<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoginController extends Controller
{


   public function login_form()
   {
      if (!Str::contains(url()->previous(), ["register", "login"])) {
         session()->put('url_previous', url()->previous());
      }

      return view('auth.login');
   }

   public function login(LoginRequest $request)
   {
      $field = isset($request['phone']) ? 'phone' : 'name';

      if (auth()->attempt($request->only($field, 'password'))) {
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
