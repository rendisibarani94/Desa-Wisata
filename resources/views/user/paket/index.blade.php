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
<h1 class="text-center mb-lg-5" style="color:#193A6F">Paket Wisata</h1>

<div class="container mt-4">
    <div class="row mb-lg-5 justify-content-center">
        <div class="col-1 mb-3 mb-lg-0">
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>
                    
                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-2.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-3.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="row mb-lg-5 justify-content-center">
        <div class="col-1 mb-3 mb-lg-0">
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-1.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-2.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-3 mb-lg-0">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/new-3.jpg') }}" class="card-img-top" alt="..." style="width: 299px; height:229px; border-radius:5px">
                <div class="card-body">
                  <h4 class="card-title text-center mb-3" style="font-weight: 600">Paket Wisata</h4>

                  <div class="row mb-3">
                    <div class="col-3">
                        <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/banknotes.png" alt="banknotes"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">Rp.350.000,00</h5>
                    </div>
                  </div>

                   <div class="row mb-3">
                    <div class="col-3 a">
                        <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
                    </div>
                    <div class="col">
                        <h5 style="font-weight: 600">3 Hari 2 Malam</h5>
                    </div>
                  </div>
                  
                  <div class="text-center">
                    <a href="#" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>



@endsection