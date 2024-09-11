<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment as comment;
use App\Models\Berita as berita;

class commentController extends Controller
{
    public function comment(){
        if(Auth::check()){
            $comment = comment::with('beritas')->limit(100)->get();

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

    public function showDetailComment(string $id){
        $comment = comment::find($id);

        $dataComment = berita::join('comments', 'beritas.id', '=', 'comments.berita_id')->where('beritas.id', '=', $comment->berita_id)->get();

        return view('penulis.detailComment', compact('comment', 'dataComment'));
    }
}
