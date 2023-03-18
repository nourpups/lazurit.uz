<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

// class RegisterController extends Controller
// {
//     public function register_form()
//     {
//         session()->put('url_previous', url()->previous());
//         return view('auth.register');
//     }
//     public function register(Request $request)
//     {
//         $url_previous = session('url_previous');

//         // validating
//         $rules = [
//             'name' => ['required', 'min:4', 'max:20'],
//             'phone' => ['required', 'regex:/^[+](99890|99891|99893|99894|99895|99897|99898|99899|99888|99833)[0-9]{7}/','unique:users,phone'],
//             'password' => ['required', 'min:6', 'max:20', 'confirmed'],
//         ];

//         $request->validate($rules);

//         $validator = Validator::make($request->all(), $rules);

//         if($validator->fails())
//         {
//             return response()->json([
//                 'status' => false,
//                 'errors' => $validator->errors()
//             ]);
//         }
//         // creating user after valid registration
//         $user = User::create([
//             'name' => $request['name'],
//             'phone' => $request['phone'],
//             'password' => Hash::make($request['password'])
//         ]);
//         // logging user after registration
//         Auth::guard()->login($user);

//         return response()->json([
//             'status' => true,
//             'redirect' => $url_previous
//         ]);

//     }
// }


namespace App\Http\Controllers;

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
    public function register(Request $request)
    {
        // validating
        $rules = [
            'name' => ['required', 'min:4', 'max:20'],
            'phone' => ['required', 'regex:/^[+](99890|99891|99893|99894|99895|99897|99898|99899|99888|99833)[0-9]{7}/','unique:users,phone'],
            'password' => ['required', 'min:6', 'max:20']
        ];

        // validate all requests and it sends output to your login.blade.php
        $validator = Validator::make($request->all(), $rules);
        $errors = $validator->errors()->toArray();

        if($validator->fails())
        {
            return response()->json([
                'status'=> false,
                'errors'=> $errors
            ]);
        }

        // creating user after valid registration
        $user = User::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password'])
        ]);
        // logging user after registration
        Auth::guard()->login($user);
// getting previous url from LoginController
        session()->flash('login', __('You have registered and logged in succesfully'));
        return response()->json([
            'status' => true,
            ]);
        }
}
