<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function delete(User $user)
  {
   $user->delete();
    if($user)
    {
        return redirect()->back()->with('fail', 'Can\'t delete user');
    }
        return redirect()->back()->with('success', 'user succesfully deleted');
  }
  public function make_admin(User $user)
  {
    if ($user->is_admin)
    {
      return redirect()->back()->with('success', __('User :user already an admin', ['user' => $user->name]));
    }
    $user->is_admin = 1;
    $user->save();
    if($user->is_admin)
    {
      return redirect()->back()->with('success', __('User :user have become admin successfully', ['user'=>$user->name]));
    }
    return redirect()->back()->with('fail', __('Can\'t make admin user :user', ['user'=>$user->name]));
  }
}

