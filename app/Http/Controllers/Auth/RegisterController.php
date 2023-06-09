<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function __;
use function request;
use function response;
use function session;
use function view;

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
