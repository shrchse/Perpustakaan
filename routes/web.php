<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// Route Untuk Member View //

Route::get('admin', function(){
    return view('user.admin');
});

Route::get('buku', function(){
    return view('user.buku');
});

Route::get('dashboard', function(){
    return view('user.dashboard');
});

Route::get('peminjaman', function(){
    return view('user.peminjaman');
});

Route::get('about', function(){
    return view('user.about');
});

Route::get('login', function(){
    return view('loginpage');
});

Route::get('sign-up', function(){
    return view('createacc');
});

// route untuk admin view //

Route::get('admin_dashboard', function(){
    return view('admin.admin_dashboard');
});
Route::get('daftar_buku', function(){
    return view('admin.daftar_buku');
});
Route::get('daftar_member', function(){
    return view('admin.daftar_member');
});
Route::get('daftar_pinjam', function(){
    return view('admin.daftar_pinjam');
});
Route::get('admin_about', function(){
    return view('admin.admin_about');
});