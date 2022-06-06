<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    
    {

    }

    public function store(Request $request){
        $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required', ],
        ])

        $user = UserAuth::whereUser
    }
}
