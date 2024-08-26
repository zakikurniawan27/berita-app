<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as user;

class beritaController extends Controller
{
    public function home (){
        return view('home.home');
    }

    public function penulisHome(){

        if(Auth::check()){
            $id = Auth::user()->id;
            $berita = user::join('beritas', 'users.id', '=', 'beritas.user_id')->where('users.id', '=', $id);
            return view('penulis.dashboard', compact('berita'));
        }
        return view('home.home');
    }
}
