@extends('layouts/main-form')

@section('warna','#0984e3')

@section('asal')
href="{{ url('/admin/search') }}"
@endsection

@section('title',"Data Kelas $kelas")


@if ($errors->any())
<div class="alert alert-danger" role="alert">
  <h1>Kesalahan !</h1>
  @foreach ($errors->all() as $error)
    <li>{{$error}} </li>
  @endforeach
</div>
@endif

@section('form')


    
   @if (count($datas) >= 1)
   <div class="column">
    <div class="row mx-auto w-100">
        <table class="table mt-3 table-responsive w-100">
            <thead class="thead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Kelas</th>
                <th scope="col">Status Pilih</th>
                <th scope="col" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
                
            @foreach($datas as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->nim}}</td>
                <td>{{$data->kelas}}</td>
                <td> 
                    @if ($data->status_pilih === 0)
                        Belum Memilih
                    @else
                        Sudah Memilih
                    @endif
                </td>
                <td>
                    <div class="column">
                        <div class="row">
                            <div class="col-md-4 justify-content-center">
                                <a href="/admin/show/{{$data->id}}" class="btn btn-primary btn-sm justify-content-center mt-1">Edit</a>
                            </div>
                            <div class="col-md-4 mt-1">
                                <a href="/admin/destroy/{{$data->id}}" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                    </div>
                </td>
              </tr>
              @endforeach
    
            </tbody>
          </table>
    
    </div>
</div>
   @else
           <div class="error m-5">
            <img src="{{asset('img/empty.svg')}}" alt="" srcset="" class="img-fluid">
            <p class="error text-center lead mt-5">Data Tidak Ada </p>
            <p class="info text-center lead mt-3"> Sepertinya tidak ada data dalam database </p>
           </div>
   @endif


@endsection


