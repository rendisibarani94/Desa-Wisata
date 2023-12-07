{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Wisata Desa')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>
    .font {
    top:10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Adjust this for the desired height */
}

.middle-font1{
    text-align: center;
}
p,h{
    color: #193A6F;
}
p{
    font-size: 20px;
}
</style>

{{-- Content --}}
@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 style="color: black">Wisata Desa</h2>
            <h1>Lumban Bul bul</h1>
        </div>
    </div>
  </div>

  <div class="container mt-lg-5">
    <h2 class="d-flex justify-content-center" style="font-weight:625; color:#193A6F">Wisata Desa Lumban Bul-bul</h2>
    <br>

    <div class="row mb-lg-5">
        <div class="col">
                    <div class="card">
                        <center>
                            <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top mt-4" style="border-radius:5px; width: 375px; height:250px;" alt="...">
                        </center>
                        <div class="card-body">
                          <h3 class="card-title text-center" style="font-weight:600">Wisata Alam</h3>
                          <center class="mt-4">
                            <a href="{{ route('wisataAlam') }}" class="btn btn-primary">Explore</a>
                          </center>
                        </div>
                      </div>
        </div>

        <div class="col">
                    <div class="card">
                        <center>
                            <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top mt-4" style="border-radius:5px; width: 375px; height:250px;" alt="...">
                        </center>
                        <div class="card-body">
                          <h3 class="card-title text-center" style="font-weight:600">Wisata Buatan</h3>
                          <center class="mt-4">
                            <a href="{{ route('wisataBuatan') }}" class="btn btn-primary">Explore</a>
                          </center>
                        </div>
                    </div>
        </div>

        <div class="col">
                    <div class="card">
                        <center>
                            <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top mt-4" style="border-radius:5px; width: 375px; height:250px;" alt="...">
                        </center>
                        <div class="card-body">
                          <h3 class="card-title text-center" style="font-weight:600">Wisata Budaya</h3>
                          <center class="mt-4">
                            <a href="{{ route('wisataBudaya') }}" class="btn btn-primary">Explore</a>
                          </center>
                        </div>
                      </div>
        </div>
    </div>
    
  </div>


@endsection