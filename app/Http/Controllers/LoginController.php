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

        // validating
        $rules = [
            $login_type => 'required|alpha|min:4|max:20',
            'password' => 'required|min:6|max:20',
        ];
        if($login_type == 'phone')
        {
            $rules[$login_type] =  ['required', 'regex:/^[+](99890|99891|99893|99894|99895|99897|99898|99899|99888|99833)[0-9]{7}/'];
        }

        $request->validate($rules);

        // attempting to check is credentials valid
        $credentials = $request->only($login_type, 'password');

        if(auth()->attempt($credentials))
        {
            $url_previous = session('url_previous');
            session()->forget('url_previous');
            // if credentials valid return with success
            return redirect($url_previous)->with('success', __('You have logged in succesfully!'));
        }
        // if credentials aren't valid return failed message
        throw ValidationException::withMessages([
            $login_type => [__('auth.failed')],
        ]);
           if(!$validator->passes()){
              return response()->json([
                 'status'=>0,
                 'error'=>$validator->errors()->toArray()
              ]);
            }

           $user_cred = $request->only('email', 'password');
            if (Auth::attempt($user_cred)) {

                 //if user is logged in and the role is user
                if(Auth()->user()->role=='user'){
                   return response()->json([ [1] ]);
                }

            }else{
                 //if user isn't logged in
                    return response()->json([ [2] ]);
            }
            return redirect("/");

    }


    public function logout() {
        auth()->logout();
        return redirect()->back()->with('warning', __('You have logged out'));
    }
}
