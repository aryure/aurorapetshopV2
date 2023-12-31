<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class Login_UserController extends Controller
{
    public function postlogin_user (Request $request)
    {
        // dd($request->all());

        // $validateData = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|password'
        // ]);

        if (Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('/beranda');

        // if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect('/about');
        // }
        // return redirect('/beranda');
    }

    public function postlogout_user (Request $request)
    {
        Auth::logout();
        return redirect('/beranda');
    }
}
