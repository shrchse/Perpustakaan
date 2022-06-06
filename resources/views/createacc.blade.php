@extends('layouts.loginlayout')
@section ('content')
<div class="box-create">
    <div class="login">Create Account</div>
    <form action="/register" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br> <br>
        <label for="mail">E-Mail</label>
        <input type="text" name="email" id="mail"> <br> <br>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone"> <br> <br>
        <label for="pass">Create Password</label> 
        <input type="password" name="pass" id="pass"> <br> <br>
        <button type="submit">Sign Up</button>
    </form>
</div>
@endsection