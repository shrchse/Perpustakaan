@extends('layouts.admin_dash')
@section('content')
<style>
    text{
        font-size: 20px;
    }
    a{
        color:  #707070;
    }
    .quotes{
        font-size: 24px;
        padding-left: 40px;
        padding-top: 40px;
    }
    .container{
        width: 900px;
        height: 320px;
        position: relative;
        bottom: -60px;
        left: 90px;
    }
    .container .list{
        position: relative;
        float: left;
        width: 200px;
        height: 300px;
        margin-right: 35px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        font-size: 24px;
        background: rgba(255, 255, 255, 0.11);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .container .list-big {
        position: relative;
        float: left;
        width: 600px;
        height: 300px;
        margin-right: 35px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        font-size: 24px;
        overflow: auto;
    }
    .container .list-big .in{
        padding: 30px;
        text-align: Left;

    }
    /* .container .list-big .in img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50px;
    } */
    .cardview{
        position: relative;
        width: 1100px;
        height: 520px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        background-image: url('images/bg-purple.jpg');
        background-size: cover;
    }
    .cardview .button{
        border: 1px solid white;
        border-radius: 8px;
        margin-top: 112px;
        margin-left: 23px;
        padding: 5px;
        width: 150px;
        position: relative;
        top: -60px;
        font-size: 20px;
        text-align: center;
    }
    .cardview .button:hover{
        background-color: whitesmoke;
        transition: 0.3s;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .container .list:hover, .list-big:hover{
        border: 1px solid #d66eff;
        transition: 0.3s;
    }
    td{
        font-size: 30px;
        padding: 10px;
    }
    
</style>

<div class="cardview">
    <div class="quotes">“Reading is essential for those who seek to rise above the ordinary.” - Jim Rohn</div>
    <div class="container">
        <div class="list">
            <table><td>Welcome, Admin
                Keep it up with your Goodwork!!
            </td></table>
    </div>
        <div class="list-big"><div class="in">Daftar Pengunjung <br>
        <table>
            <th>Nama</th>
            <th>Tanggal</th>
            <tr>
                <td>Oling An</td>
                <td>02/07/01</td>
            </tr>
            <tr>
                <td>Lista</td>
                <td>02/07/01</td>
            </tr>
            <tr>
                <td>Zida</td>
                <td>02/07/01</td>
            </tr>
                        <tr>
                <td>Oling An</td>
                <td>02/07/01</td>
            </tr>
            <tr>
                <td>Lista</td>
                <td>02/07/01</td>
            </tr>
            <tr>
                <td>Zida</td>
                <td>02/07/01</td>
            </tr>
        </table></div>
    </div>
    </div>
</div>
@endsection