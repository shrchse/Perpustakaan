<?php

namespace App\Http\Controllers;
use App\Models\Skorsing;

use Illuminate\Http\Request;

class SkorsingController extends Controller
{
    public function index() {
        $data = Skorsing::all();
        return view('admin.daftar_skorsing', compact('data'));
    }
}
