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
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" uk-parallax="bgy: -200" data-src="{{ asset('image/home.png') }}" uk-img width="1920">
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

  <div class="container mt-lg-5">
    <div class="row">
        <div class="col">
            <h1 style="color: #193A6F; font-weight:600">Wisata Desa Lumban Bul Bul</h1>
        </div>
        <div class="col-3">
            <a href="#" class="btn" style="background-color: #FF9E53; font-weight:600; border-radius:25px; color:white; padding:13px; text-decoration:none">Selengkapnya...</a>
        </div>
    </div>
    <div class="container mt-4 mb-lg-5">
        <div class="row mb-lg-5 justify-content-center">
            <div class="col mb-3 mb-lg-0">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                    <div class="card-body">
                      <h4 class="card-title text-center mb-3" style="font-weight: 600">Pantai I</h4>

                        <div class="text-center">
                            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">ini adalah pantai 1 yang terletak pada</h5>
                        </div>
                        
                      <div class="text-center">
                        <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col mb-3 mb-lg-0">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/new-2.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                    <div class="card-body">
                      <h4 class="card-title text-center mb-3" style="font-weight: 600">Pantai II</h4>
                      .container
                        <div class="text-center">
                            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">ini adalah pantai 2 yang ada di </h5>
                        </div>
    
                      <div class="text-center">
                        <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col mb-3 mb-lg-0">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/new-3.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                    <div class="card-body">
                      <h4 class="card-title text-center mb-3" style="font-weight: 600">Pantai III</h4>

                        <div class="text-center">
                            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">ini adalah pantai 3 yang ada di asdasdasd adasdasd asd</h5>
                        </div>
    
                      <div class="text-center">
                        <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
  <span class="horizontal-line" style="display: block; width: 100%; height: 0.5px; background-color: #000;"></span>
  <div class="container mt-5">
    <div class="row mb-3    ">
        <div class="col">
            <h1 style="color: #193A6F; font-weight:600">Jelajahi Informasi di Desa</h1>
        </div>
        <div class="col-3">
            <a href="#" class="btn" style="background-color: #FF9E53; font-weight:600; border-radius:25px; color:white; padding-top:13px; padding-bottom:13px; padding-left:20; padding-right:20; text-decoration:none">Jelajahi...</a>
        </div>
    </div>

    <div class="row mb-lg-5 justify-content-center">
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Kategori Wisata</h4>

                    <div class="text-center">
                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Wisata Alam, Buatan, Budaya</h5>
                    </div>
                    
                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-2.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                    <div class="text-center">
                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">3D2N, Toba Sailor, Sunsetin</h5>
                    </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-3.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Linimasa</h4>

                    <div class="text-center">
                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Berita Terbaru Yang Dapat Diraih</h5>
                    </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya...</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
  
@endsection
{{-- Content --}}
