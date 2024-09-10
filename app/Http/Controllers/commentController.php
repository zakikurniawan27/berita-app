<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment as comment;

class commentController extends Controller
{
    public function comment(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $comment = comment::latest()->paginate(5);

            return view('penulis.comment', compact('comment'));
        }

        return view('home.home');
    }

    public function createComment(Request $request, string $id){
        $validate = $request->validate([
            'name' => 'required',
            'comment'=> 'required'
        ]);

        $validate['berita_id'] = $id;

        comment::create($validate);

        return redirect()->route('showDetail', $id);
    }
}
