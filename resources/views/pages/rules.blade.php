@extends('layouts/main')

@section('style')
    <link rel="stylesheet" href="{!! asset('css/keluar.css') !!}">
@endsection

@section('warna','#e17055')

@section('title','Ketentuan Pemilih')

@section('asal')
href="{{ url('/') }}"
@endsection

@section('form')

    <h1 class="text-center my-4">Ketentuan Pemilihan</h1>
    <ol>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae aspernatur, nulla minus maxime ex amet vitae. Cumque, recusandae obcaecati repellendus magnam omnis quisquam modi impedit animi facilis sunt et ut.</li>
    </ol>

@endsection


