<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as Auth;
use App\Http\Controllers\beritaController as Berita;

Route::get('/', [Berita::class,'home'])->name('home');

Route::get('/login', [Auth::class, 'login'])->name('login');
Route::post('/log', [Auth::class, 'createLogin'])->name('createLogin');
Route::get('/registrasi', [Auth::class, 'registrasi'])->name('registrasi');
Route::post('/reg', [Auth::class, 'createRegistrasi'])->name('createRegistrasi');

Route::get('/dashboard', [Berita::class, 'penulisHome'])->name('penulisHome');