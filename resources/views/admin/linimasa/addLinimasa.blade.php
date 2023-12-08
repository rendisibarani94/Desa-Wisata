{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Tambah Linimasa')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>

</style>
{{-- Style --}}

@section('content')
<div class="container">
    <h1>Tambah Linimasa</h1><br>
    <form action="{{ route('createLinimasa') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputJudul">Masukkan Judul Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" autocomplete="off" name="judul" class="form-control" id="inputJudul">
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputGambar">Masukkan Gambar Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="file" autocomplete="off" name="gambar" class="form-control" id="inputGambar">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputDeskripsiGambar">Masukkan Deskripsi Singkat Gambar</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" autocomplete="off" name="deskripsi_gambar" class="form-control" id="inputDeskripsiGambar">
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputDeskripsi">Masukkan Deskripsi</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border-radius:5px">
                    <textarea class="form-control border-dark" style="border-radius: 5px;" autocomplete="off" id="deskripsiTextarea" name="deskripsi" aria-label="With textarea" placeholder="Masukkan Deskripsi"></textarea>

                  </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</div>
@endsection