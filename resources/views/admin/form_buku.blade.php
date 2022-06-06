@extends('layouts.admin_dash')
@section('content')
<head><link rel="stylesheet" href="pinjam.css"></head>
<div class="box">
    <form action="" method="">
        <br>
        Form Buku
        <br> <br>
        <table>
            <tr>
                <td><label for="kode">Kode Buku</label></td>
                <td><input type="text" name="kode" id="kode"> <br></td>
            </tr>
            <tr>
                <td><label for="judul">Judul Buku</label></td>
                <td><input type="text" name="judul" id="judul"> <br></td>
            </tr>
            <tr>
                <td><label for="penulis">Penulis</label></td>
                <td><input type="text" name="penulis" id="penulis"> <br></td>
            </tr>
            <tr>
                <td><label for="judul">Penerbit</label></td>
                <td><input type="text" name="penerbit" id="penerbit"> <br></td>
            </tr>
            <tr>    
                <td></td>
                <td></td>
            </tr> 
            <td><button type="submit" value="submit">Tambah Buku</button></td>
        </table>
    </form>
</div>
@endsection