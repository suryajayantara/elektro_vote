@extends('layouts/main')

@section('style')
    <link rel="stylesheet" href="{!! asset('css/keluar.css') !!}">
@endsection

@section('warna','#e17055')

@section('title','Voting ')

@section('asal')
href="{{ url('/users') }}"
@endsection

@section('table')

<div class="container">
  <div class="card-deck mt-5">
      <div class="card">
          <img src="{!! asset('img/bat.jpg') !!}" class="card-img-top rounded-circle p-4" alt="...">
          <div class="card-body">
              <h5 class="card-title">Batman</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.</p>
              <button type="button" class="btn btn-primary">Slap Vote Now!</button>
          </div>
      </div>
      <div class="card">
          <img src="{!! asset('img/sup.jpg') !!}" class="card-img-top rounded-circle p-4" alt="...">
          <div class="card-body">
              <h5 class="card-title">Clark Ken-Tod</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.</p>
              <button type="button" class="btn btn-primary">Slap Vote Now!</button>
          </div>
      </div>
      <div class="card">
          <img src="{!! asset('img/wonder.jpg') !!}" class="card-img-top rounded-circle p-4" alt="...">
          <div class="card-body">
              <h5 class="card-title">Pejuang Feminisme</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.</p>
              <button type="button" class="btn btn-primary">Slap Vote Now!</button>
          </div>
      </div>
  </div>
</div>

@endsection


