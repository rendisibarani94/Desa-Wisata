{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Kesehatan')
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
p{
    font-size: 20px;
    color: #193A6F;
}
</style>

{{-- Content --}}
@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" uk-parallax="bgy: -200" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 uk-parallax="y: 100,0"  style="color: black">Wisata Desa</h2>
            <h1 uk-parallax="y: 100,0" >Lumban Bul bul</h1>
        </div>
    </div>
  </div>

  {{-- Container --}}
  <div class="container mt-lg-5">
    <h1 class="text-center mb-5" style="font-weight:600; color:#193A6F">Ibadah</h1>
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="text-center">Gereja HKBP Balige</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/hkbp-balige.png') }}" alt="" style="border: 1px solid black; border-radius:4px; height:350px; width 450px">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2 mt-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Minggu 08.00 - 10.00</h3>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/fluency-systems-filled/48/marker.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Jl. Gereja, Balige III, Kec. Balige, Toba, Sumatera Utara 22314</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="container">
                    <p>Gereja ini terbuat dari kayu beratap seng, pertama sekali berdiri tahun 1861. Dimulai oleh lembaga penginjilan dari Jerman, kawasan gereja ini berukuran 1,5 hektar, diatas menara gereja ini juga terdapat lonceng yang sudah tua mulai masuknya Kristen ke tanah batak, gereja ini sangat terawat.</p>
                </div>
                
            </div>
        </div>
    </div>
  </div>

@endsection