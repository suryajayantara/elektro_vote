@extends('layouts/template')

@section('mainstyle')
<link rel="stylesheet" href="{!! asset('css/index.css') !!}">
@endsection

@section('title','E-Voting Elektro')

@section('content')  


    {{-- Card --}}
    <section id="HEADER" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col">
                        <div class="header border rounded mt-3 shadow-sm">
                            
                            <div class="title">
                                <h3 class="greeting m-0 font-weight-normal">Selamat Pagi</h3>
                                <h4 class="name">Admin {{ Auth::user()->name }}</h4>
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

    <div id="CONTENT" class="container mt-4 content">

            
        </div>
    </div>

    <section id="CONTENT" class="container mt-4 content">
        
        <div class="row justify-content-center">
                <div class="col-lg-8 col-12">                   
                    <a href="{{ route('admin.addVote') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/admin/add.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Tambahkan Pemilih</h3>
                                    <p class="m-0 text-secondary">Tambahkan Data Pemilih Disini.</p>
                                </div>
                            </div>
                        </div>
                    </a>


                    <a href="{{ route('admin.search') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-3">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/admin/profile.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Data Pemilih</h3>
                                    <p class="m-0 text-secondary">Periksa dan Edit data pemilih disini.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/supplier') }}">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 mb-5">
                                <div class="col-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/admin/count.svg') !!}" alt="">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h3 class="m-0 text-dark">Lihat Suara</h3>
                                    <p class="m-0 text-secondary">Lihat Perolehan Suara Sementara</p>
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