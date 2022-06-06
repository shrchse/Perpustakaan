<?php

namespace App\Http\Controllers;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index() {
        $data = Pengembalian::all();
        return view('admin.admin_pengembalian', compact('data'));
    }
}
