<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   public function register_form()
   {
      return view('auth.register');
   }

   public function register(RegisterRequest $request)
   {
      $request->offsetSet('password', Hash::make(request('password')));
      
      $user = User::create($request->all());

      Auth::guard()->login($user);

      session()->flash('login', __('You have registered and logged in succesfully'));
      return response()->json([
         'status' => true,
      ]);
   }
}
