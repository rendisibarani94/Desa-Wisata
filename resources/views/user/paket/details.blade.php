{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Paket Wisata')
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
<h1 class="text-center mb-lg-5" style="color:#193A6F">Paket Wisata</h1>
@foreach ($paket as $item)
    <center>
    <img src="{{ asset('image/new-1.jpg') }}" style="width: 750px; height:450px" alt="">
    <p style="font-size: 13px"><i>deskripsi</i></p>
    </center>

    <article class="uk-article mb-lg-5">

        <div class="container">
            <h1 class="uk-article-title">{{ $item->nama}}</h1>
        
            <div class="container">
                <p style="white-space: pre-line;">{{ $item->deskripsi}}</p>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Jumlah Partisipan</h3>
                    </div>
                    <div class="col">
                        <h3>{{ $item->partisipan}} Orang</h3>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Penginapan</h3>
                    </div>
                    <div class="col">
                        @if($item->isPenginapan)
                        <h3 style="font-weight: 600">Include</h3>
                        @else
                        <h3 style="font-weight:600">Tidak Include</h3>
                        @endif
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Makanan</h3>
                    </div>
                    <div class="col">
                        @if($item->isMakanan)
                        <h3 style="font-weight: 600">Include</h3>
                        @else
                        <h3 style="font-weight:600">Tidak Include</h3>
                        @endif
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Transport</h3>
                    </div>
                    <div class="col">
                        @if($item->isTransport)
                        <h3 style="font-weight: 600">Include</h3>
                        @else
                        <h3 style="font-weight:600">Tidak Include</h3>
                        @endif
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Lama Kegiatan</h3>
                    </div>
                    <div class="col">
                        <h3>{{ $item->lama_kegiatan}}</h3>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Contact Person</h3>
                    </div>
                    <div class="col">
                        <a href="https://wa.me/{{ $item->contact_person}}?text=Hello%20there!" class="btn btn-success">Send WhatsApp Message</a>
                        <h3></h3>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3>Deskripsi Tambahan</h3>
                    </div>
                    <div class="col">
                        <h3>{{ $item->deskripsi_tambahan}}</h3>
                    </div>
                </div>

                

            </div>

        </div>
    
    
    </article>
    @endforeach

@endsection