{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Galeri')
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
{{-- Style --}}

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
<h1 class="text-center mb-lg-5" style="color:#193A6F">Galeri wisata</h1>

<div class="container mt-4">
    <div class="row mb-lg-5">
        <div class="col-1"></div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-1.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
            {{-- <img src="{{ asset('image/new-1.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px"> --}}
        </div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-2.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-3.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-lg-5">
        <div class="col-1"></div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-1.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-2.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="uk-inline">
                <img src="{{ asset('image/new-3.jpg') }}" alt="" style="width: 343px; height:403px; border-radius:5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight:600">SUNSET BULBUL</h3>
                    <p style="color: white;">May 23 Juli 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection