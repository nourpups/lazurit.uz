<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use URL;

class LoginController extends Controller
{
  public function login_form()
  {
    $previous_url = URL::previous();
    $previous_url_not_register = strpos($previous_url, "register") === false;
    $previous_url_not_login = strpos($previous_url, "login") === false;

    if ($previous_url_not_register && $previous_url_not_login) {
      session()->put('url_previous', $previous_url);
    }

    return view('auth.login');
  }
  public function login(Request $request)
  {
    // checking is login phone or name
    $login_type = is_numeric($request['login']) ? 'phone' : 'name';
    $request->merge([$login_type => $request['login']]);

    //remove spaces from phone
    $request['phone'] = str_replace(" ", "", $request['phone']);

    //regex for phone
    $regex = 'regex:/^[+](998)(90|91|93|94|95|97|98|99|88|33)[0-9]{7}$/';
    //creating rules
    $rules = [
      $login_type => 'required|alpha|min:4|max:20',
      'password' => 'required|min:6|max:20',
    ];
    if ($login_type == 'phone') {
      $rules['phone'] = ['required', $regex];
    }

    $validator = Validator::make($request->all(), $rules);

    $errors = $validator->errors()->toArray();
    // перезаписываю имя ключа полей phone и name на login чтобы выводились ошибки во view, так как там name равен login. Взгляни на 86 строку, по сути я вернул назад то что делал там
    if (isset($errors[$login_type])) {
      $errors['login'] = $errors[$login_type];
      unset($errors[$login_type]);
    }

    // validate all requests and it sends output to your login.blade.php
    if ($validator->fails()) {
      return response()->json([
        'status' => false,
        'errors' => $errors
      ]);
    }

    $user_cred = $request->only($login_type, 'password');
    if (Auth::attempt($user_cred)) {
      session()->flash('login', __('You have logged in succesfully'));
      return response()->json([
        'status' => true,
      ]);
    }

    return response()->json([
      'status' => false,
      'errors' => [
        'login' => [__('auth.failed')]
      ]
    ]);


  }


  public function logout()
  {
    auth()->logout();
    return redirect()->back()->with('warning', __('You have logged out'));
  }
}
