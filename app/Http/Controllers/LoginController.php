<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\ValidationException;

// class LoginController extends Controller
// {
//     public function login_form()
//     {
//         session()->put('url_previous', url()->previous());
//         return view('auth.login');
//     }
//     public function login(Request $request)
//     {
//         $url_previous = session('url_previous');
//         // checking is login phone or name
//         $login_type = is_numeric($request['login']) ? 'phone' : 'name';
//         $request->merge([ $login_type => $request['login'] ]);

//         // validating
//         $rules = [
//             $login_type => 'required|alpha|min:4|max:20',
//             'password' => 'required|min:6|max:20',
//         ];
//         if($login_type == 'phone')
//         {
//             $rules[$login_type] =  ['required', 'regex:/^[+](99890|99891|99893|99894|99895|99897|99898|99899|99888|99833)[0-9]{7}/'];
//         }

//         $validator = Validator::make($request->all(), $rules);

//         $credentials = $request->only($login_type, 'password');

//         if($validator->passes())
//         {
//             if(Auth::attempt($credentials))
//             {
//                 return response()->json([
//                     'status' => true,
//                     'redirect' => url($url_previous),
//                 ]);
//             }
//             return response()->json([
//                 'status' => false,
//                 'errors' => 'Credentials do not match our records'
//             ]);
//         } else {

//             return response()->json([
//                 'status' => false,
//                 'errors' => $validator->errors()
//             ]);
//         }

//     }


//     public function logout() {
//         auth()->logout();
//         return redirect()->back()->with('warning', __('You have logged out'));
//     }

// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login_form()
    {
        session()->put('url_previous', url()->previous());
        return view('auth.login');
    }
    public function login(Request $request)
    {

        // checking is login phone or name
        $login_type = is_numeric($request['login']) ? 'phone' : 'name';
        $request->merge([ $login_type => $request['login'] ]);
        // validating rules
        $rules = [
            $login_type => 'required|alpha|min:4|max:20',
            'password' => 'required|min:6|max:20',
        ];
        if($login_type == 'phone')
        {
            $rules['phone'] =  ['required', 'regex:/^[+](99890|99891|99893|99894|99895|99897|99898|99899|99888|99833)[0-9]{7}/'];
        }

             $validator = Validator::make($request->all(), $rules);

             $errors = $validator->errors()->toArray();
               // перезаписываю имя ключа полей phone и name на login чтобы выводились ошибки во view, так как там name равен login. Взгляни на 86 строку, по сути я вернул назад то что делал там
             if(isset($errors[$login_type]))
             {
                $errors['login'] = $errors[$login_type];
                unset($errors[$login_type]);
             }

           // validate all requests and it sends output to your login.blade.php
           if($validator->fails()){
              return response()->json([
                 'status'=> false,
                 'errors'=> $errors
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
                'errors' =>[
                    'login' =>  [__('auth.failed')]
                ]
            ]);


    }


    public function logout() {
        auth()->logout();
        return redirect()->back()->with('warning', __('You have logged out'));
    }
}
