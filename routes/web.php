<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as Auth;
use App\Http\Controllers\beritaController as Berita;
use App\Http\Controllers\commentController as Comment;

Route::get('/', [Berita::class,'home'])->name('home');
Route::get('/detail/{id}/berita', [Berita::class, 'showDetail'])->name('showDetail');
Route::post('/create/comment/{id}', [Comment::class, 'createComment'])->name('createComment');

Route::get('/login', [Auth::class, 'login'])->name('login');
Route::post('/log', [Auth::class, 'createLogin'])->name('createLogin');
Route::get('/registrasi', [Auth::class, 'registrasi'])->name('registrasi');
Route::post('/reg', [Auth::class, 'createRegistrasi'])->name('createRegistrasi');
Route::post('/logout', [Auth::class, 'logOut'])->name('logOut');

Route::middleware(['auth', 'penulis'])->group(function(){
    Route::get('/dashboard', [Berita::class, 'penulisHome'])->name('penulisHome');
    Route::get('/dashboard/berita', [Berita::class, 'penulisBerita'])->name('penulisBerita');

    Route::get('/dashboard/berita/create', [Berita::class, 'createBerita'])->name('createBerita');
    Route::post('/dashboard/berita/create/post', [Berita::class, 'storeBerita'])->name('storeBerita');

    Route::get('/dashboard/berita/edit/{id}', [Berita::class, 'editBerita'])->name('editBerita');
    Route::put('/dashboard/berita/edit/up/{id}', [Berita::class, 'updateBerita'])->name('updateBerita');

    Route::delete('/dashboard/berita/delete/{id}', [Berita::class, 'destroyBerita'])->name('destroyBerita');

    Route::get('/dashboard/comment', [Comment::class, 'comment'])->name('comment');
    Route::get('/dashboard/{id}/comment/detail', [Comment::class, 'showDetailComment'])->name('showDetailComment');
});