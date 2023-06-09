<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate('16');

        return view('manager.users', compact('users'));
    }
   public function delete(User $user)
   {
      $name = $user->name;
      if ($user->delete()) {
         return redirect()->back()->with('success', "User $name succesfully deleted");
      }
      return redirect()->back()->with('danger', "Can't delete user $name");
   }

   public function makeAdmin(User $user)
   {
      if ($user->is_admin) {
         return redirect()->back()->with('success', __('User :user already an admin', ['user' => $user->name]));
      }
      $user->is_admin = 1;
      if ($user->update()) {
         return redirect()->back()->with(
            'success',
            __("User :user have become admin successfully", ['user' => $user->name])
         );
      }
      return redirect()->back()->with('danger', __("Can't make admin user :user", ['user' => $user->name]));
   }
}

