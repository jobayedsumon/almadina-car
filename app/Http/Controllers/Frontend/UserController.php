<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login_page()
    {
        return view('frontend.customer.login');
    }

    public function user_account()
    {
        $user = auth()->user();
        return view('frontend.customer.user-account', compact('user'));
    }

    public function register(Request $request)
    {
        $request->validate([
           'name' => 'required|min:3',
           'password' => 'required|min:6|confirmed',
           'email' => 'required|unique:users',
            'phone_number' => 'required',
            'terms' => 'required'
        ]);

        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'role_id' => 2,
           'phone_number' => $request->phone_number,
            'password' => bcrypt($request->passowrd)
        ]);

        return redirect(route('login'))->with('msg', 'Registration Successful !');
    }

    public function login(Request $request)
    {

    }

}
