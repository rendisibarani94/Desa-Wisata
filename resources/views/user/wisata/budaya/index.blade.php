{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Wisata Budaya')
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
    <h2 class="d-flex justify-content-center" style="font-weight:625; color:#193A6F">Wisata Budaya</h2>
    <br>
    <div class="card" style="border: 1px solit black">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('image/pantai1.png') }}" alt="" width="400" height="450" style="border: 1px solid black; border-radius:4px">
                </div>
                <div class="col-md-8">
                    <h3 style="font-weight:500; color:#193A6F">Pantai I</h3>
                    <p>Pasir putih yang berada dipinggiran pantai ini dan panorama alam yang indah menjadikannya sebuah potensi dan daya tarik wisata, selain itu pantai ini juga cocok untuk dijadikan tempat olahraga air karena airnya yang cukup dangkal dan tenang. Pantai Bulbul memiliki ukuran sekitar 865 meter.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 style="font-weight:500; color:#193A6F; line-height: 0.1; margin-top:68px;">Kapasitas Pengunjung</h3>
                            <h4 style="font-weight:750; line-height: 0.1;">750 Orang</h4>
                        </div>
                        <div class="col-md-6">
                            <br><br>
                        <a href="#" class="btn" style="background-color: #F98125; width:180px; height:50px; color:white; text-decoration:none; border-radius:50px">
                            <p class="text-center" style="color: white; font-weight:600; font-size:20px">READ MORE</p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
  </div>


@endsection