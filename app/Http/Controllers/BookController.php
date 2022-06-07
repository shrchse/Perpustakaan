<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::all();
        return view('user.buku', compact('data'));
    }

    public function index2(){
        $data = Book::all();
        return view('admin.daftar_buku', compact('data'));
    }

    public function delete($id){
        $data = Book::find($id);
        $data->delete();
        return view('daftar_buku');
    }
}
