{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Admin')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>

</style>
{{-- Style --}}

{{-- Content --}}
@section('content')
<div class="contaniner">
    <div class="row mb-lg-2 mt-lg-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Homestay</h5>
              <p class="card-text">Kelola Data Homestay</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Kuliner</h5>
              <p class="card-text">Kelola Data Kuliner</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Kesehatan</h5>
              <p class="card-text">Kelola Data Kesehatan</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Ibadah</h5>
              <p class="card-text">Kelola Data Ibadah</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row mb-lg-2 mt-lg-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Bank</h5>
              <p class="card-text">Kelola Data Bank</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Paket Wisata</h5>
              <p class="card-text">Kelola Data Paket Wisata</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Galeri</h5>
              <p class="card-text">Kelola Data Galeri</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Linimasa</h5>
              <p class="card-text">Kelola Data Linimasa</p>
              <a href="#" class="btn btn-primary">Selengkapnya...</a>
            </div>
          </div>
        </div>

      </div>  

</div>
@endsection
{{-- Content --}}
