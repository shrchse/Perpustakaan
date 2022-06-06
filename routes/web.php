<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserAuth;

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

Route::get('buku', [BookController::class, 'index']);

// Route::get('buku', function(){
//     return view('user.buku');
// });

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

Route::post("user", [UserAuth::class,'userLogin']);

Route::view("login",'login');

Route::get('sign-up', function(){
    return view('createacc');
});

Route::get('search', function(){
    return view('user.search');
});
// route untuk admin view //

Route::get('admin_dashboard', function(){
    return view('admin.admin_dashboard');
});
Route::get('daftar_buku', [BookController::class, 'index2']);

// Route::get('daftar_buku', function(){
//     return view('admin.daftar_buku');
// });

//Route::get('daftar_member', function(){
//    return view('admin.daftar_member');
//});

Route::get('daftar_member',[MemberController::class, 'index']);

// Route::get('daftar_pinjam', function(){
//     return view('admin.daftar_pinjam');
// });
Route::get('daftar_pinjam',[PeminjamanController::class, 'index']);

Route::get('admin_about', function(){
    return view('admin.admin_about');
});
Route::get('admin_search', function(){
    return view('admin.admin_search');
});

//addition - new

Route::get('form_buku', function(){
    return view('admin.admin_formBuku');
});

Route::get('form_pengembalian', function(){
    return view('admin.admin_formPengembalian');
});

Route::get('form_addMember', function(){
    return view('admin.add_member');
});