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
                                <h4 class="name m-0">Surya Jayantara I Putu</h4>
                                <a class="btn btn-sm btn-outline-light btn-keluar" href=""
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 Keluar
                                </a>                           
                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="CONTENT" class="container mt-4 content">
        <div class="row justify-content-center">
                <div class="col-lg-8 col-12">                   
                    <a href="{{ ('stock') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/masuk.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Gunakan Hak Pilih</h3>
                                    <p class="m-0 text-secondary">Kelola data barang anda disini</p>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/manage') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/stok.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Lihat Calon</h3>
                                    <p class="m-0 text-secondary">Kelola dan cetak laporan stok disini</p>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/supplier') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-5">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/suplier.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Ketentuan</h3>
                                    <p class="m-0 text-secondary">Kelola data suplier disini</p>
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