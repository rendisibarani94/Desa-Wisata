{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Paket Wisata')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>

</style>
{{-- Style --}}

@section('content')
<div class="container">
    <h1>Tambah Paket Wisata</h1><br>
    <form action="{{ route('createPaket') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputJudul">Masukkan Nama Paket Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" autocomplete="off" name="nama" class="form-control" id="inputJudul">
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
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputGambar">Masukkan Banyak Partisipan Disini</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="number" autocomplete="off" name="partisipan" class="form-control" id="inputGambar">
                  </div>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputDeskripsiGambar">Termasuk</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" style="border: 1px solid black" name="isPenginapan" value="1">
                    <label class="form-check-label" for="inlineCheckbox1">Include Penginapan</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" style="border: 1px solid black" name="isMakanan" value="1">
                    <label class="form-check-label" for="inlineCheckbox2">Include Makanan</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="border: 1px solid black" name="isTransport" value="1">
                    <label class="form-check-label" for="inlineCheckbox3">Include Transport</label>
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputGambar">Masukkan Lama Kegiatan</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" autocomplete="off" name="lama_kegiatan" class="form-control" id="inputGambar">
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputGambar">Masukkan Nomor dari Contact Person</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border: 0.5px solid rgb(173, 173, 173); border-radius:5px">
                    <input type="text" autocomplete="off" name="contact_person" class="form-control" id="inputGambar">
                  </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-3">
                <label for="inputDeskripsiTambahan">Masukkan Deskripsi Tambahan</label>
            </div>
            <div class="col">
                <div class="input-group mb-3" style="border-radius:5px">
                    <textarea class="form-control border-dark" style="border-radius: 5px;" autocomplete="off" id="deskripsiTextarea" name="deskripsi_tambahan" aria-label="With textarea" placeholder="Masukkan Deskripsi"></textarea>

                  </div>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</div>
@endsection