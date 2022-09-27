<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authentication(Request $request)
    {
        // dd('ini halaman authentication');
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            if (Auth::user()->status != 'active'){
                // return redirect('login')->with('status', 'Your account in not active yet, please contact admin !');
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account in not active yet, please contact admin !');
                return redirect('/login');
            }

            // $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            }

            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
            // $request->session()->regenerate();
            // return redirect('');
            dd(Auth::user());
        }
        // return redirect('login')->with('status', 'Your account in not active yet, please contact admin !');
        Session::flash('status', 'failed');
        Session::flash('message', 'login invalid');
        return redirect('/login');
    }
}
