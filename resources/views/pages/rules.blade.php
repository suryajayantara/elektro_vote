@extends('layouts/main')

@section('style')
    <link rel="stylesheet" href="{!! asset('css/keluar.css') !!}">
@endsection

@section('warna','#e17055')

@section('title','Ketentuan Pemilih')

@section('asal')
href="{{ url('/contestant') }}"
@endsection

@section('table')
    <h4 class="m-3">Peraturan Pemilihan</h4>
    <ul>
        <li>Pemungutan suara dilakukan melalui sistem e-voting pada laman </li>
        <li>Pemungutan suara dimulai pada Senin, 26 Oktober 2020 pukul 08.00 s/d 16.00 WITA </li>
        <li>Penghitungan voting dilakukan secara otomatis pada laman  pemilihan Ketua HMJ TE tanpa intervensi dari Panitia dan disaksikan oleh perwakilan kelas, HMJ Teknik Elektro, dan kandidat calon ketua.</li>
        <li>Pemungutan suara dilakukan melalui sistem e-voting pada laman </li>
    </ul>

    <div class="row m-3">
        <div class="col-md-12">
            <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#exampleModal">Laporkan Pelanggaran</button>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Laporkan Pelanggaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection


