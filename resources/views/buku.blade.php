@extends('layouts.dashboardlayout')
@section('content')
    <!-- tables goes here -->
    <style>
        table{
            font-size: 20px;
            text-align: center;
            border: 1px solid white;
            margin-left: auto;
            margin-right: auto;
            padding: 2%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 15px;
        }
        tr{
            border-bottom: 1px solid white;
        }
        th,tr,td{
            background-color: azure;
            padding-left: 25px;
            padding-right: 25px;
            border-radius: 5px;
        }
        td{
            padding-left: 25px;
            padding-right: 25px;
            text-align: left;
        }
        th{
            background-color: aliceblue;
        }
    </style>

    <h4>Daftar Buku</h4>
    <table>
        <th>Kode</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Status</th>

        <tr>
            <td>101</td>
            <td>Just You and Me</td>
            <td>Titi Sanaria</td>
            <td>Storial Publishing</td>
            <td>Available</td>
        </tr>
        <tr>
            <td>102</td>
            <td>The Perfect Charm</td>
            <td>Dy Lunaly</td>
            <td>Histeria</td>
            <td>Available</td>
        </tr>
        <tr>
            <td>103</td>
            <td>Trilogi Bono & Bawo</td>
            <td>Onet Aditha</td>
            <td>Leutika</td>
            <td>Unavailable</td>
        </tr>

    </table>

@endsection