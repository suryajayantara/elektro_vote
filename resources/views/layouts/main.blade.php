@extends('layouts/template')

@section('mainstyle')
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}">
    @yield('style')
@endsection

@section('content')
    <section id="HEADER" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col">
                        <div class="header border rounded mt-3 shadow-sm">
                            
                            <div class="title" style="background-color : @yield('warna') ;">
                                <a class="btn kembali" href="{{ url('/') }}"><i class="fas fa-arrow-left"></i></a>
                                <h4 class="text-center text-white">@yield('title')</h4>
                            </div>
                            <div class="container">
                            <div class="action-group">
                  
                                <div class="row">
                                    @yield('action-button')
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col">
                                      @yield('search')
                                    </div>
                                </div>

                            </div>
                            
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="CONTENT" class="container mt-3">
        <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="table-responsive rounded border shadow-sm bg-light">
                        <table class="table table-sm table-bordered">
                           @yield('table')
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-lg-6 col-11 ">
                  <nav aria-label="Page navigation example ">
                    <ul class="pagination justify-content-center ">
                        {{-- {{ $datas->links() }} --}}
                    </nav>
                </div>
            </div>
    </section>
    @endsection
