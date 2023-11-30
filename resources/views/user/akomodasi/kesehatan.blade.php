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
    <h1 class="text-center mb-5" style="font-weight:600; color:#193A6F">Kesehatan</h1>
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="text-center">Rumah Sakit Umum Balige</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/rs-hkbp.png') }}" alt="" style="border: 1px solid black; border-radius:4px; height:350px">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2 mt-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Buka 00.00 - 24.00</h3>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/fluency-systems-filled/48/marker.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Jl. Gereja No.17, Lumban Dolok
                                    Haume Bange, Kec. Balige, Toba,
                                     Sumatera Utara</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="container">
                    <p>
                        Rumah Sakit Umum HKBP Balige adalah sebuah rumah sakit swasta milik Yayasan Kesehatan HKBP yang terletak di Balige, Sumatera Utara, Indonesia.
    Halaman rumah sakit pada sebuah situs web merupakan pusat informasi penting bagi pengunjung yang mencari layanan medis. Biasanya, halaman tersebut menampilkan informasi yang komprehensif, termasuk alamat lengkap rumah sakit, nomor kontak yang dapat dihubungi, dan jam operasional. 
    Selain itu, daftar layanan medis yang tersedia, dokter dan spesialis yang bekerja di sana, serta fasilitas yang dimiliki juga seringkali disertakan. Pengunjung juga dapat menemukan formulir janji temu online untuk memudahkan mereka dalam membuat jadwal konsultasi dengan dokter. 
    Desain yang bersih dan responsif sangat penting untuk memastikan pengalaman pengguna yang baik. Keseluruhan informasi yang ditampilkan di halaman rumah sakit harus terkini dan akurat, membantu pengguna dalam membuat keputusan yang tepat terkait dengan layanan kesehatan yang mereka butuhkan.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
  </div>

@endsection