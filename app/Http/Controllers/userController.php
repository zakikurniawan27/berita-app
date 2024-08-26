<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function createLogin(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else{
            return redirect()->route('login')->with('failed','email and password wrong!');
        }

    }

    public function registrasi(){
        return view('auth.registrasi');
    }

}
