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
                                <a class="btn btn-sm btn-outline-light btn-keluar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                    
                    {{-- Alert --}}
                    {{-- <div class="alert alert-danger" role="alert">
                        <p class="text-center mt-3">
                            Terima Kasih Sudah menggunakan Hak Suara Anda
                        </p>
                      </div> --}}
                    
                    <a href="{{route('user.vote')}}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/user/vote.svg') !!}" alt="" class="img-menu">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Gunakan Hak Pilih</h3>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('user.contestant') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/user/candidate.svg') !!}" alt=""  class="img-menu">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Lihat Calon</h3>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('user.rules') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-5">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/user/rules.svg') !!}" alt=""  class="img-menu">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Ketentuan</h3>
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

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
@endsection