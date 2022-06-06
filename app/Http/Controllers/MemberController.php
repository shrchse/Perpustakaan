<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $daftar_member = Member::all();
        return view('member.index', compact('daftar_member'));
    }
}
