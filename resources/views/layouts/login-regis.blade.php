@extends('layouts/template')

@section('mainstyle')
<link rel="stylesheet" href="{!! asset('css/login-regis.css') !!}">
@endsection

@section('content')  
    <section id="CONTENT" class="container mt-4 content">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12 text-center">
            <img src="{!! asset('img/logo.png')!!}" alt="" class="logo-login" style="width: 10rem">
            <p class="lead mt-3"></p>
            <h4 class="text-center mb-5 text-danger font-weight-bold">HMJ TEKNIK ELEKTRO</h4>
                <div class="cardku rounded shadow-lg p-4 text-left mb-5">
                    @yield('form')              
                </div>
            </div>
        </div>
    </section>
@endsection