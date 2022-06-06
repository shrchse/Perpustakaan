<?php

namespace App\Http\Controllers;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(){
        $data = Visitor::all();
        return view('admin.admin_dashboard', compact('data'));
    }
}
