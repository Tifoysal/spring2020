<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('backend.layouts.login');
    }

    public function doLogin(Request $request)
    {
        //step 1 check input
        $credentials=$request->except('_token');

        //step 2 check valid user
        if (Auth::attempt($credentials)) {
            //step2.1 if valid login to the system
            // Authentication passed...

            return redirect()->route('dashboard');
        }else
        {
            //step2.2 return back with error: invalid user
            return redirect()->back()->with('message','Invalid Credentials');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }


}
