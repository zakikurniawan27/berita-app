<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User as user;
use App\Models\Berita as berita;

class beritaController extends Controller
{
    public function home (){
        return view('home.home');
    }

    public function penulisHome(){

        if(Auth::check()){
            $id = Auth::user()->id;
            $berita = berita::where('user_id', '=', $id)->get();

            return view('penulis.dashboard', compact('berita'));
        }

        return view('home.home');
    }

    public function penulisBerita(){

        if(Auth::check()){
            $id = Auth::user()->id;
            $berita = user::join('beritas', 'users.id', '=', 'beritas.user_id')->where('users.id', '=', $id)->get();

            return view('penulis.berita', compact('berita'));
        }

        return view('home.home');
    }

    public function createBerita(){
        return view('penulis.createBerita');
    }
}
