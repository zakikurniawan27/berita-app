<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as Auth;
use App\Http\Controllers\beritaController as Berita;

Route::get('/', [Berita::class,'home'])->name('home');

Route::get('/login', [Auth::class, 'login'])->name('login');
Route::post('/log', [Auth::class, 'createLogin'])->name('createLogin');
Route::get('/registrasi', [Auth::class, 'registrasi'])->name('registrasi');
Route::post('/reg', [Auth::class, 'createRegistrasi'])->name('createRegistrasi');
Route::post('/logout', [Auth::class, 'logOut'])->name('logOut');

Route::get('/dashboard', [Berita::class, 'penulisHome'])->name('penulisHome');
Route::get('/dashboard/berita', [Berita::class, 'penulisBerita'])->name('penulisBerita');

Route::get('/dashboard/berita/create', [Berita::class, 'createBerita'])->name('createBerita');
Route::post('/dashboard/berita/create/post', [Berita::class, 'storeBerita'])->name('storeBerita');

Route::get('/dashboard/berita/edit/{id}', [Berita::class, 'editBerita'])->name('editBerita');
Route::put('/dashboard/berita/edit/up/{id}', [Berita::class, 'updateBerita'])->name('updateBerita');

Route::delete('/dashboard/berita/delete/{id}', [Berita::class, 'destroyBerita'])->name('destroyBerita');

Route::get('/dashboard/comment', [Berita::class, 'penulisHome'])->name('penulisHome');
