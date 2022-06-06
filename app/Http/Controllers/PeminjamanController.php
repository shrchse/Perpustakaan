<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() {
        $daftar_pinjam = Peminjaman::all();
        return view('admin.daftar_pinjam', compact('daftar_pinjam'));
    }
}
