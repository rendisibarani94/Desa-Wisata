{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Wisata Alam')
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
    <h1 class="d-flex justify-content-center" style="font-weight:625; color:#193A6F">Pantai 1</h1>
    <br>
    <div class="card mb-lg-5">
        <div class="card-body">
            {{-- <h2 class="mb-4" style=" color: #193A6F; font-weight:600">Pantai I</h2> --}}
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('image/pantai1.png') }}" alt="" width="400" height="350" style="border: 1px solid black; border-radius:4px">
                </div>
                <div class="col-md-8">
                    <br>
                    <p style="color:black">Pasir putih yang berada dipinggiran pantai ini dan panorama alam yang indah menjadikannya sebuah potensi dan daya tarik wisata, selain itu pantai ini juga cocok untuk dijadikan tempat olahraga air karena airnya yang cukup dangkal dan tenang. Pantai Bulbul memiliki ukuran sekitar 865 meter.</p>
                    <div class="row mt-5">
                        <div class="col-md-5">
                            <h3 class="mb-2" style=" color: #193A6F; font-weight:600; line-height:0.1">Waktu Buka</h3>
                            <h4 style="font-weight:600; line-height:0.1">Senin  - Jumat   : 08.00 - 18.00</h4>
                            <h4 style="font-weight:600; line-height:0.1">Sabtu - Minggu : 08.00 - 20.00</h4>
                        </div>
                        <div class="col-md-4">
                            <h3 style=" color: #193A6F; font-weight:600; line-height:0.1">Kapasitas Pengunjung</h3>
                            <h4 style="font-weight:600; line-height:0.1">Kapasitas : 750 Orang</h4>
        
        
                        </div>
                        <div class="col-md-3">
                            <h3 class="mb-2" style=" color: #193A6F; font-weight:600; line-height:0.1">Fasilitas</h3>
                            <ul>
                                <li>
                                    <h4 style="font-weight:600; line-height:0.1">Homestay</h4>
                                </li>
                                <li>
                                    <h4 style="font-weight:600; line-height:0.1">Toilet Umum</h4>
                                </li>
                                <li>
                                    <h4 style="font-weight:600; line-height:0.1">Kuliner</h4>
                                </li>
                                <li>
                                    <h4 style="font-weight:600; line-height:0.1">Rekreasi Air</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="d-flex justify-content-center mb-lg-5" style="font-weight:625; color:#193A6F">Akomodasi</h1>
    <h1 class="d-flex justify-content-center mb-lg-5" style="font-weight:625; color:#193A6F">User Review</h1>
    <div class="card mb-5" style="border: 1px solid black">
    <div class="card-body">
        <form action="{{ route('rating1') }}" method="POST">
            @csrf
            <h3 id="message" >Rate Your Experience</h3>
              <input type="hidden" name="rating" id="rating" value="0">
              <div class="container1" style="background-color:#193A6F">
                <div class="star-container inactive">
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="star-container inactive">
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="star-container inactive">
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="star-container inactive">
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="star-container inactive">
                  <i class="fa-regular fa-star"></i>
                </div>
              </div>
              <div class="input-group mt-4">
                <span class="input-group-text">Comment</span>
                <textarea class="form-control border-dark" style="border-radius: 5px" name="komen" aria-label="With textarea" placeholder="Masukkan Komentar"></textarea>
              </div>
              <button class="color-primary" id="submit" disabled>Submit</button>
        </form>
    </div>
    </div>


  </div>
  {{-- Container --}}

@endsection