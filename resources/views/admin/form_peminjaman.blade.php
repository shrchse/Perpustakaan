@extends('layouts.admin_dash')
@section('content')
<head><link rel="stylesheet" href="pinjam.css"></head>
<div class="box">
    <form action="" method="">
        <br>
        Form Peminjaman
        <br> <br>
        <table>
            <tr>
                <td><label for="no">No. Member</label></td>
                <td><input type="text" name="no" id="no"> <br></td>
            </tr>
            <tr>
                <td><label for="kode">Kode Buku</label></td>
                <td><input type="text" name="kode" id="kode"> <br></td>
            </tr>
            <tr>
                <td><label for="tgl">Tanggal Peminjaman</label></td>
                <td><input type="text" name="tgl" id="tgl"> <br></td>
            </tr>
            <tr>    
                <td></td>
                <td></td>
            </tr> 
            <td><button type="submit" value="submit">Tambah Peminjaman</button></td>
        </table>
    </form>
</div>
@endsection