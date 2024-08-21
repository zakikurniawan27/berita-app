<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as Auth;
use App\Http\Controllers\beritaController as Berita;

Route::get('/', [Berita::class,'home'])->name('home');

Route::get('/login', [Auth::class, 'login'])->name('login');
