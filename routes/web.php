<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Halo', function() {return 'Halo, Selamat Datang di Praktikum Laravel';});

Route::get('/user/{id}', function($id){return "Profil User dengan ID :".$id;});
Route::get('/produk/{slug?}',function($slug='semua-produk'){return "Menampilkan :".$slug;});
Route::get('/mahasiswa', [MahasiswaController::class,'index']);
Route::get('/profile', [MahasiswaController::class,'profile']);
