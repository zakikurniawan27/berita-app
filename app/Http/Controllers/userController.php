<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function createRegistrasi(Request $request){
        $request->validate([
            'username'=> 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4'
        ]);

        $data = new User([
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        $data->save();

        return redirect('/login');
    }

    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
