@extends('layouts.admin_dash')
@section('content')
<head><link rel="stylesheet" href="pinjam.css"></head>
<div class="box">
    <form action="" method="">
        <br>
        Form 
        <br> <br>
        <table>
            <tr>
                <td><label for="nama">Nama Member</label></td> 
                <td><input type="text" name="nama" id="nama"> <br></td>
            </tr>
            <tr>
                <td><label for="no">No. Member</label></td>
                <td><input type="text" name="no" id="no"> <br></td>
            </tr>
            <tr>    
                <td></td>
                <td></td>
            </tr> 
            <td><button type="submit" value="submit">Tambah Member</button></td>
        </table>
    </form>
</div>
@endsection