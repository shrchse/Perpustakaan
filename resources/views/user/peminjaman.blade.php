@extends('layouts.dashboardlayout')
@section('content')

<head><link rel="stylesheet" href="pinjam.css"></head>
<div class="box">
    <form action="" method="">
        <br>
        Form Peminjaman Buku
        <br> <br>
        <table>
            <tr>
                <td><label for="kode">Kode Buku</label></td>
                <td><input type="text" name="kode" id="kode"> <br></td>
            </tr>
            <tr>
                <td><label for="judul">Judul Buku</label></td>
                <td><input type="text" name="Judul Buku" id="judul"></td>
            </tr>
            <tr>
                <td><label for="tgl_pinjam">Tanggal Peminjaman</label></td>
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