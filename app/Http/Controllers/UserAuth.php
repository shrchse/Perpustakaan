<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{

    function userLogin(Request $req)
    { 
    
        $item=$req->input();
       $req->session()->put('username' ,$item['username']);
       //return redirect('user.dashboard');
       
        
    }

}
