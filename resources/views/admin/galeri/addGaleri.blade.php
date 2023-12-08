{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Tambah Galeri')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>

</style>
{{-- Style --}}

@section('content')
<div class="container">
    <h1>Tambah Galeri</h1><br>
    <form action="{{ route('createGaleri') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputGambar">Masukkan Gambar Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="file" name="gambar" class="form-control" id="inputGambar">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputJudul">Masukkan Judul Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" name="judul" class="form-control" id="inputJudul">
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputTanggal">Masukkan Tanggal</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="date" name="tanggal" class="form-control" id="inputTanggal">
                  </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</div>
@endsection