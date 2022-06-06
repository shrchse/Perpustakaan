<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::all();
        return view('book.buku', ['data'=> $data]);
    }
}
