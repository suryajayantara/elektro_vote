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
        <div class="row justify-content-center">
                <div class="col-lg-8 col-12">   
                    <div class="alert alert-danger" role="alert">
                        <p class="text-center mt-3">
                            Pilihlah Calon Ketua Himpunan Mahasiswa Dibawah Ini
                        </p>
                      </div>
                    {{-- 1 --}}
                    <div onclick="vote(1)">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-12 col-sm-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/contestant/adjiemenu.png') !!}" alt="" width="200">
                                </div>
                                <div class="col-12 col-sm-5 d-flex flex-column justify-content-center my-5">
                                    <h2 class="m-0 text-dark text-center">Adjie Mikayana</h2>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div  onclick="vote(2)">
                        <div class="container">
                            <div class="cardku row rounded shadow-sm p-2 my-3">
                                <div class="col-12 col-sm-4 p-0 d-flex align-items-center">
                                    <img src="{!! asset('img/contestant/bobomenu.png') !!}" alt="" width="200">
                                </div>
                                <div class="col-12 col-sm-5 d-flex flex-column justify-content-center my-5">
                                    <h2 class="m-0 text-dark text-center">Eka Cahyadi</h2>
                                </div>
                                <!-- <div class="col-1 p-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-right"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    
                </div>
        </div>
    </section>

    <script>
        function vote(e){
            Swal.fire({
                title: 'Sudah Yakin?',
                text: `Sudah yakin memilih Calon dengan No ${e} ?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = route('user.rules');
                    Swal.fire(
                    'Berhasil',
                    'Suaramu Berhasil Di Pakai !',
                    'success'
                    )
                }
            })
        } 
    </script>
    

   
     
@endsection