@extends('layouts/template')

@section('mainstyle')
    <link rel="stylesheet" href="{!! asset('css/main-form.css') !!}">
@endsection

@section('content')
    <section id="HEADER" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col">
                        <div class="header border rounded mt-3 mb-5 shadow-sm">
                            
                            <div class="title" style="background-color : @yield('warna') ;">
                                <a class="btn kembali" @yield('asal') ><i class="fas fa-arrow-left"></i></a>
                                <h4 class="text-center text-white">@yield('title')</h4>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        @yield('form')
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
 @endsection
