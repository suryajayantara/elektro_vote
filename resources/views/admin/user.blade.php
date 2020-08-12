@extends('layouts/main')

@section('style')
    <link rel="stylesheet" href="{!! asset('css/masuk.css') !!}">
@endsection

@section('warna','#e17055')

@section('title','Data Pemilih')

@section('action-button')
    <div class="col-12 pr-1 mt-3 mb-4">
        <a href="" class="btn btn-success full-width ">
            <i class="fa fa-plus-square"></i>
            Tambah
        </a> 
    </div>
@endsection



@if (session('status'))
    <div class="alert alert-primary" role="alert">
     {{session('status')}}
  </div>
@endif

@if (session('success-delete'))
    <div class="alert alert-danger" role="alert">
     {{session('success-delete')}}
  </div>
@endif


@section('table')
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Jumlah Pemilih</th>
            <th scope="col">Tombol Pilihan Aksi</th>
        </tr>
    </thead>

    <tbody>

        
@endsection
