<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\User as user;
use App\Models\Berita;

class beritaController extends Controller
{
    public function home (){
        $berita = Berita::get();
        
        return view('home.home', compact('berita'));
    }

    public function penulisHome(){

        if(Auth::check()){
            $id = Auth::user()->id;
            $berita = Berita::where('user_id', '=', $id)->get();

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

        $id = Auth::user()->id;

        return view('penulis.createBerita', compact('id'));
    }

    public function storeBerita(Request $request){
        
        
        $data = $request->validate([
            'title'=> 'required',
            'image'=>'image|mimes:png,jpg,jpeg',
            'content'=> 'required'    
        ]);

        $data['user_id'] = auth()->user()->id;
        if($request->file('image')){
            $data['image'] = $request->file('image')->store('images');
        }

        Berita::create($data);
        return redirect()->route('penulisBerita');
    }
    
    public function editBerita(string $id){
        $data = Berita::find($id);

        return view('penulis.edit', compact('data'));
    }

    public function updateBerita(Request $request, string $id){
        $berita = Berita::find($id);
        
        $data = $request->validate([
            'title'=> 'required',
            'image'=>'image|mimes:png,jpg,jpeg',
            'content'=> 'required'    
        ]);

        if($request->file('image')){
            if($berita->image !== null)Storage::delete($berita->image);

            $data['image'] = $request->file('image')->store('images');
        }

        Berita::whereId($id)->update($data);

        return redirect()->route('penulisBerita');
    }

    public function destroyBerita(string $id){
        $del = Berita::find($id);

        Storage::delete($del->image);
        $del->delete();

        return redirect()->route('penulisBerita');
    }
}