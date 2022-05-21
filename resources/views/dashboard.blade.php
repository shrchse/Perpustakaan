@extends('layouts.dashboardlayout')
@section('content')
<style>
    text{
        font-size: 20px;
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
        display: inline-block;
        position: relative;
        width: 200px;
        height: 300px;
        margin-right: 35px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        font-size: 24px;
    }
    .container .list-big{
        display: inline-block;
        position: relative;
        width: 600px;
        height: 300px;
        margin-right: 35px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        font-size: 24px;
    }
    .cardview{
        position: relative;
        width: 1100px;
        height: 520px;
        border: 1px solid lightsteelblue;
        border-radius: 12px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
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
    
    /* .ima{
        left: 460px;
        top: -60px;
        position: relative;
    } */
</style>

<div class="cardview">
    <div class="quotes">“Reading is essential for those who seek to rise above the ordinary.” - Jim Rohn</div>
    <div class="container">
        <div class="list">
            <table><td>Discover new books everyday</td></table>
            <div class="button">Start Now!</div>
        </div>
        <div class="list-big"></div>
    </div>
</div>
@endsection