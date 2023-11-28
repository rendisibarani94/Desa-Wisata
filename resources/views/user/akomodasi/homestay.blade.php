{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Homestay')
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
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 style="color: black">Wisata Desa</h2>
            <h1>Lumban Bul bul</h1>
        </div>
    </div>
  </div>

  {{-- Container --}}
  <div class="container mt-lg-5">
    <h1 class="text-center mb-5" style="font-weight:600">Homestay</h1>
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="text-center">Homestay Cahaya</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/hmst-cahaya.png') }}" alt="" style="border: 1px solid black; border-radius:4px; height:350px">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3 mt-2">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/bed.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">2 Room</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios/50/shower-and-tub.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">1 Room</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/ios-filled/50/aspect-ratio.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">20.0 m2</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/material-sharp/24/user.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">2 Guest</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <img width="48" height="45" src="https://img.icons8.com/fluency-systems-filled/48/marker.png" alt="bed"/>

                            </div>
                            <div class="col-md-10">
                                <h3 style="font-weight: 600">Pantai 1</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="container">
                    <p>
                        Homestay Cahaya di Desa Lumbanbulbul 2 menawarkan akomodasi di Toba dan berjarak 120 meter dari Pantai Tambunan. Properti ini memiliki tempat parkir.
                        Setiap kamar dilengkapi dengan tempat tidur yang nyaman. Kamar mandi dilengkapi dengan bak air dan gayung air.
                        Anda dapat menikmati hidangan di Rahayu Steak. Pilihan tempat makan lainnya juga terdapat di sekitar properti.
            
                        Fasilitas lain di Homestay Desa Lumban Gaol 2 adalah bagian penerima tamu 24 jam.
                        Bandara terdekat adalah Bandara Internasional Sisimangaraja XII, 23,1 km dari akomodasi.
                        </p>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection