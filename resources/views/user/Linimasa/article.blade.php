{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Article')
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
</style>
{{-- Style --}}

@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" uk-parallax="bgy: -200" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 uk-parallax="y: 100,0"  style="color: black">Wisata Desa</h2>
            <h1 uk-parallax="y: 100,0" >Lumban Bul bul</h1>
        </div>
    </div>
</div>
<h1 class="text-center mb-lg-5" style="color:#193A6F">Linimasa</h1>
@foreach ($article as $item)
    
    <center>
    <img src="{{ asset('linimasa/'.$item->gambar) }}" style="width: 750px; height:450px" alt="">
    <p style="font-size: 13px"><i>{{ $item->deskripsi_gambar }}</i></p>
    </center>

    <div class="container mt-lg-5">
        <article class="uk-article mb-lg-5">

            <h1 class="uk-article-title">{{ $item->judul }}</h1>
        
            <p class="uk-article-meta">Written by Pengelola Desa Wisata on <span>{{ $item->createAt }}</span></p>
            
            <div class="container">
                <p style="white-space: pre-line;">{{ $item->deskripsi }}</p>
                {{-- <p>{!! nl2br(e($item->deskripsi)) !!}</p> --}}
            </div>
        
        
        </article>
    </div>
    
@endforeach
@endsection