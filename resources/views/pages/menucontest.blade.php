@extends('layouts/template')

@section('mainstyle')
<link rel="stylesheet" href="{!! asset('css/index.css') !!}">
@endsection

@section('title','E-Voting Elektro')

@section('content')  
<section id="HEADER" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col">
                        <div class="header border rounded mt-3 shadow-sm">
                            
                            <div class="title">
                                <h3 class="greeting m-0 font-weight-normal">Selamat Pagi</h3>
                                <h4 class="name">{{ Auth::user()->name }}</h4>
                                {{-- <a class="btn btn-sm btn-outline-light btn-keluar" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                 
                                </a>                           
                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> --}}
                                <a class="btn btn-sm btn-outline-light btn-keluar border rounded text-white" href="/users">
                                    <i class="fas fa-arrow-left"></i>
                                    </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section id="CONTENT" class="container mt-4 content">
        {{-- Data Info --}}
        {{-- <h3 class="text-center font-info">Info Terkini</h3>
        <div class="row justify-content-center">
            <div class="card col-lg-3 m-2 shadow shadow-sm" width="3rem">
                <div class="card-body">
                    <h3 class="text-center"> Total Suara </h3>
                    <canvas id="myChart" width="100" height="100"></canvas>
                </div>
              </div>
              <div class="card col-lg-4 m-2 shadow shadow-sm" width="3rem">
                <img src="{{asset('img/logo.png')}}" class="card-img-top m-2" alt="..." style="height: 5rem; width: 7rem">
                <div class="card-body">
                  <p class="lead">Pemenang Sementara</p>
                  <h3 class="card-title">I Made Simayodia</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div> --}}

        {{-- Data Info --}}
        <div class="row justify-content-center">
                <div class="col-lg-8 col-12">                   
                    <a href="{{ route('contestant.one') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-12 col-sm-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/contestant/adjiemenu.png') !!}" alt="" width="200">
                                </div>
                                <div class="col-12 col-sm-5 d-flex flex-column justify-content-center my-5">
                                    <h3 class="m-0 text-dark text-center">Adjie Mikayana</h3>
                                    <p class="m-0 text-secondary text-center">Berani ,Tegas , Budayakan Baku Hantam !</p>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </a>

                    <a href="{{ ('stock') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-12 col-sm-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/contestant/bobomenu.png') !!}" alt="" width="200">
                                </div>
                                <div class="col-12 col-sm-5 d-flex flex-column justify-content-center my-5">
                                    <h3 class="m-0 text-dark text-center">Eka Cahyadi</h3>
                                    <p class="m-0 text-secondary text-center">Bunuh Diri adalah jalan tercepat !</p>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </a>

                    
                </div>
        </div>
    </section>


    

   
     
@endsection