{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Bank')
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
    <h1 class="text-center mb-5" style="font-weight:600">Bank</h1>
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="text-center">Bank Mandiri Balige</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/mandiri-balige.png') }}" alt="" style="border: 1px solid black; border-radius:4px; width 450px">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2 mt-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Buka 08.00 - 18.00</h3>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/fluency-systems-filled/48/marker.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Jl. Patuan Nagari, Sangkar Nihuta, Kec. Balige, Toba, Sumatera Utara 22313</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="container">
                    <p>
                        Kantor Bank Mandiri Tbk di Kabupaten Toba Samosir, Sumatera Utara.

Kantor bank mandiri ini melayani berbagai keperluan terkait mandiri internet banking / internet banking mandiri, pendaftaran mandiri internet, mandiri banking, bank mandiri internet banking, dan bankmandiri internet banking. Untuk kalangan bisnis juga mandiri internet bisnis, mandiri e banking, m banking mandiri dan banyak layanan untuk kemudahan transaksi online. Layanan lainnya juga meliputi pinjaman bank mandiri, bank syariah mandiri, pendaftaran sms banking mandiri dan mandiri mobile banking.
Untuk informasi lebih lanjut terkait Bank Mandiri dapat diperoleh dengan datang langsung pada kantor Bank Mandiri terdekat, mengunjungi website resminya, atau mengubungi kontak call center / customer service Bank Mandiri yang tersedia.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
  </div>

@endsection