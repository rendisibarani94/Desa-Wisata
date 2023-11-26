{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Home')
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

.middle-font1,.middle-font2 {
    text-align: center;
}
</style>
{{-- Style --}}

{{-- Content --}}
@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset('image/home.png') }}" uk-img width="1920">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2><i>WELCOME TO</i></h2>
            <h2><i>DESA WISATA </i>LUMBANBULBUL</h2>
        </div>
        <div class="middle-font2">
            <h1>TINGGALKAN JEJAK, TEMUKAN</h1>
            <h1>KETENANGAN</h1>
        </div>
    </div>
  </div>
  
@endsection
{{-- Content --}}
