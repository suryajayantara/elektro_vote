@extends('layouts/main-form')

@section('warna','#e17055')

@section('asal')
href="{{route('user.contestant')}}"
@endsection

@section('title','Adjie Mikayana')



@section('form')

<img src="{{asset('img/contestant/adjie.png')}}" class="mx-auto d-block" width="200">
<h3 class="mt-5">Gede Chandra Adjie Mikeyana</h3>
<p class="lead">Calon Nomor Urut 1</p>

{{-- <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul> --}}

  <ul class="nav nav-tabs">
    <li class="nav-item">
        <a data-toggle="tab" href="#home" class="nav-link active">Home</a>
    </li>
    <li class="nav-item">
        <a data-toggle="tab" href="#menu1" class="nav-link"> Visi & Misi</a>
    </li>
    <li class="nav-item">
        <a data-toggle="tab" href="#menu2" class="nav-link"> Biodata </a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade show in active mx-5 my-5">
      <h3>Tentang</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade mx-5 my-5">
      <h3>Visi & Misi</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade mx-5 my-5">
      <h3>Biodata</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

@endsection


