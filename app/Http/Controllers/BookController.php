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

    //public function edit($id)
    //{
     //   $data = Book::find($id);
       // return view('admin.form_buku', compact('data'));
    //}

    public function update(Request $request, $id)
    {
        $data = Book::find($id);
        $data->kode_buku = $request->input('kode_buku');
        $data->judul = $request->input('judul');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->update();
        return redirect()->back()->with('status','Book Updated Successfully');
    }

}
