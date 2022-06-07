@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Book
                        <a href="{{ url('form_buku') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('form_buku/'.$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{$data->kode_buku}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Judul</label>
                            <input type="text" name="judul" value="{{$data->judul}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penulis</label>
                            <input type="text" name="penulis" value="{{$data->penulis}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" value="{{$data->penerbit}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Edit Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection