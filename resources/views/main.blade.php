@extends('layouts.layout')
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
        }
        th{
            background-color: aliceblue;
        }
    </style>

    <h4>Daftar Member</h4>
    <table>
        <th>No</th>
        <th>Nama Member</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Email</th>

        <tr>
            <td>1</td>
            <td>Bambang</td>
            <td>Jl.Pramuka</td>
            <td>08954434041</td>
            <td>20108217210028@mhs.ulm.ac.id</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Amazida</td>
            <td>Jl.PMR</td>
            <td>08954434041</td>
            <td>2010822344328@mhs.ulm.ac.id</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Felisitas Artemesia</td>
            <td>Jl.Pramuka</td>
            <td>08954434041</td>
            <td>20108217210028@mhs.ulm.ac.id</td>
        </tr>

    </table>

@endsection