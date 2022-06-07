@extends('layouts.loginlayout')
@section ('content')

<div class="box">
    <div class="log">Login to Your Account</div>
    <form action="admin_dashboard" method="GET">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required> <br><br>
        <label for="password">Password</label>
        <input type="password" name="pass" id="password" required> <br><br>
        <!-- Butuh function untuk tombol sign in -->
        <!-- Sign In harus dibikin session dlu, Sementara klik di 'sign-in' nya-->
        <button type="submit">Sign In</a></button> <br> 
        <a href="sign-up"><div class="sign-up">Create Account</div></a>
    </form>
</div>

<?php

if(isset($_POST['submit']))
{
    $username= $_POST["username"];
    $password= $_POST["password"];

    if($username != 'username'){
        echo "username tidak cocok";
    }

    //elseif($username)
}
?>

@endsection