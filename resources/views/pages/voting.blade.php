@extends('layouts/main')

@section('style')
    <link rel="stylesheet" href="{!! asset('css/keluar.css') !!}">
@endsection

@section('warna','#e17055')

@section('title','Voting ')

@section('asal')
href="{{ url('/') }}"
@endsection

@section('form')

    <div class="column">
        <div class="row m-1 p-1">

            <div class="col-sm-4 m-1">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <a href="#" class="btn btn-primary justify-content-center">Pilih Pasangan </a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 m-1">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <a href="#" class="btn btn-primary">Pilih Pasangan </a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 m-1">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <a href="#" class="btn btn-primary">Pilih Pasangan </a>
                  </div>
                </div>
              </div>
          </div>
    </div>

@endsection


