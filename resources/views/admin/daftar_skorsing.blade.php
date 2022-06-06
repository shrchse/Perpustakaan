@extends('layouts.admin_dash')
@section('content')
<style>
        table{
            font-size: 20px;
            text-align: center;
            border: 1px solid white;
            margin-left: 0;
            margin-right: auto;
            padding: 1%;
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
        button{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
        }
        .edit{
            padding: 6px 30px;
            background: rgba(236, 255, 26, 0.74);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(236, 255, 26, 0.3);
        }
        .delete{
            padding: 6px 20px;
            background: rgba(255, 26, 26, 0.74);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 26, 26, 0.3);
        }
        .add{
            padding: 10px 40px;
            margin-bottom: 10px;
            background: rgba(127, 254, 168, 0.75);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 26, 26, 0.3);   
        }
        button:hover{
            border: none;
            background-color: cornflowerblue;
        }
    </style>

    <h4>Daftar Skorsing</h4>
    <a href="form_skorsing"><button class="add" type="submit">Add</button></a>
    <table>
        <colgroup span="2"></colgroup>
        <th>No. Member</th>
        <th>Keterangan</th>
        <th>Tanggal Selesai</th>
        <th colspan=2 scope="colgroup">Action</th>
        <!-- <tr>
            <td>Temp</td>
            <td>Temp</td>
            <td>Temp</td>
            <td><button class="edit" type="submit">Edit</button></td>
            <td><button class="delete" type="submit">Delete</button></td>
        </tr> -->
        @foreach($data as $item)
            <tr>
                <td>{{ $item->no_member }}</td>
                <td>{{ $item->ket }}</td>
                <td>{{ $item->tgl_cabut_skorsing }}</td>
                <td><button class="edit" type="submit">Edit</button></td>
                <td><button class="delete" type="submit">Delete</button></td>
            </tr>
        @endforeach
@endsection