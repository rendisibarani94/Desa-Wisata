{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Kuliner')
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
    <h1 class="text-center mb-5" style="font-weight:600; color:#193A6F">Kuliner</h1>
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="text-center">Hutanta Cafe</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/hutanta-cafe.png') }}" alt="" style="border: 1px solid black; border-radius:4px; height:350px">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3 mt-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                                
                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Buka 08.00 - 18.00</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/fluency-systems-filled/48/marker.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Jl. P. Siantar No.KM 2, Balige</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="container">
                    <p>
                        Hutanta Cafe adalah Kafe yang berada di area Jl. P. Siantar No.KM 2, Balige 22312 Indonesia. Jam buka pada 8:00 - 18:00 yang beroperasi di Sumatra Utara. 
                        Rumah makan ini memiliki banyak gambar makanan dan Video Makanan karena makanannya sangat enak dan ramai food blogger kunjungi.
                        </p>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection