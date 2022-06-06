<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $books = DB::table('books')->get();

        return view ('books.index'.compact('tasks'))
    }
}
