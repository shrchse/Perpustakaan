@extends('layouts.admin_dash')
@section('content')
<head><link rel="stylesheet" href="pinjam.css"></head>
<div class="box">
    <form action="" method="">
        <br>
        Form Pengembalian Buku
        <br> <br>
        <table>
            <tr>
                <td><label for="kode">Kode Buku</label></td>
                <td><input type="text" name="kode" id="kode"> <br></td>
            </tr>
            <tr>
                <td><label for="tgl_pinjam">Tanggal Pengembalian</label></td>
                <td><input style="margin-left:10px;" type="date" name="tgl_pinjam" id="tgl_pinjam"></td>
            </tr>
            <tr>    
                <td></td>
                <td></td>
            </tr> 
            <td><button type="submit" value="submit">Ajukan Peminjaman</button></td>
        </table>
    </form>
</div>
@endsection