<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registrasi(){
        return view('auth.registrasi');
    }
}
