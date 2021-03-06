@extends('layouts/main-form')

@section('warna','#0984e3')

@section('asal')
href="{{ url('/admin') }}"
@endsection

@section('title','Tambah Data')



@section('form')

@if ($errors->any())
<div class="alert alert-danger mt-3" role="alert">
  <h1>Kesalahan !</h1>
  @foreach ($errors->all() as $error)
    <li>{{$error}} </li>
  @endforeach
</div>
@endif

@if (session('success'))
    
  <div class="alert alert-primary mt-3" role="alert">
      {{session('success')}}
  </div>
@endif

<form action=" {{route('admin.store')}} " method="POST">

  {{ csrf_field() }}


  <div class="form-group mt-3">
    <label for="name">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="nim">Nim Mahasiswa</label>
    <input type="number" class="form-control" id="num" name="nim">
  </div>

  <div class="form-group mt-3 ">
    <label for="semester" >Semester</label>
    <select class="form-control" id="semester" name="semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
  </div>


  <div class="form-group mt-3 ">
    <label for="suplier" id="prodi" >Program Studi</label>
    <select class="form-control" id="prodi" name="prodi" onchange="myFunction()">
        <option value="MI">Manajemen Informatika</option>
        <option value="TO">Teknik Otomasi</option>
        <option value="TL">Teknik Listrik</option>
    </select>
  </div>

  <div class="form-group mt-3 ">
    <label for="kelas" >Kelas</label>
    <select class="form-control" id="kelas" name="kelas">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
  </div>

  




  <input type="submit" class="btn btn-primary float-right mb-3" value="Tambahkan">
</form>

<script >

    

    function myFunction(){
        let prodi = document.querySelectorAll('#prodi').value;
        console.log(prodi);
    }

</script>
@endsection


