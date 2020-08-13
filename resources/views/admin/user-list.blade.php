@extends('layouts/main-form')

@section('warna','#0984e3')

@section('asal')
href="{{ url('/admin') }}"
@endsection

@section('title','Tambah Data')


@if ($errors->any())
<div class="alert alert-danger" role="alert">
  <h1>Kesalahan !</h1>
  @foreach ($errors->all() as $error)
    <li>{{$error}} </li>
  @endforeach
</div>
@endif

@section('form')


    
    <table class="table mt-3 table-responsive">
        <thead class="thead">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Status Pilih</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            
        @foreach($datas as $data)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->nim}}</td>
            <td> 
                @if ($data->status_pilih === 0)
                    Belum Memilih
                @else
                    Sudah Memilih
                @endif
            </td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>



@endsection


