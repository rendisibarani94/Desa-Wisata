<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul_tab')</title>
    {{-- Link --}}
    <link rel="stylesheet" href="{{ asset('css/rating.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    {{-- End of Link --}}
      @yield('additional_style')
</head>
<body>
        {{-- <!-- Navbar --> --}}
        <div class="container">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a href="#"><img src="{{ asset('image/lbb.png') }}" alt="" width="60"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="color: #193A6F">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil') }}">PROFIL</a>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        KATEGORI WISATA
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('wisataAlam') }}">WISATA ALAM</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisataBuatan') }}">WISATA BUATAN</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisataBudaya') }}">WISATA BUDAYA</a></li>
                      </ul>
                    </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('wisataDesa') }}">WISATA DESA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('paketWisata') }}">PAKET WISATA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeri') }}">GALERI & EVENT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LINIMASA</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        {{-- <!-- End Navbar --> --}}
        {{-- Content --}}
        <div class="content">
          @yield('content')
        </div>
          {{-- End of Content --}}
    
        {{-- Footer --}}
        <footer style="background-color: #193A6F">
            <div class="container">
                <div class="row">
                      <div class="col-sm mt-4 mb-1">
                        <img src="{{ asset('image/lbb.png') }}"  width="200" alt="lbb">
                      </div>
                      <div class="col-sm mt-5 mb-1">
                        <img src="{{ asset('image/del.png') }}" width="140" alt="del">
                      </div>
                      <div class="col-sm mt-3">
                        <h4 style="color: #FF9E53; font-weight:bold" class="mb-4">Links</h4>
                        <p class="mb-1"><a href="" style="color: white; font-weight:bold; text-decoration: none;">Home</a></p>
                        <p><a href="" style="color: white; font-weight:bold; text-decoration: none;">Wisata Desa</a></p>
                        <p><a href="" style="color: white; font-weight:bold; text-decoration: none;">Paket Wisata</a></p>
                        <p><a href="" style="color: white; font-weight:bold; text-decoration: none;">Galeri & Event</a></p>
                        <p><a href="" style="color: white; font-weight:bold; text-decoration: none;">Linimasa</a></p>
                      </div>
                      <div class="col-sm mt-3">
                        <h4 style="color: #FF9E53; font-weight:bold" class="mb-4">Contact Info</h4>
                        <p style="font-size: 18px; color:white" class="mb-1">Kelompok Sadar Wisata (Pokdarwis)</p>
                        <a href="" target="blank">
                            <p style="font-size: 18px; color:white;font-weight:bold" class="mb-1"><span uk-icon="icon: receiver"></span>+62 361 154874</p>
                        </a>
                        <p style="font-size: 18px; color:white" class="mb-1">Pengelola Desa</p>
                        <a href="" target="blank">
                            <p style="font-size: 18px; color:white;font-weight:bold" class="mb-1"><span uk-icon="icon: receiver"></span>+62 361 154874</p>
                        </a>

                      </div>
                      <div class="col-sm mt-3">
                        <h4 style="color: #FF9E53; font-weight:bold" class="mb-4">Address</h4>
                        <p style="font-size: 18px; color:white">Jl. Sibola Hotang No.20, Kec. Balige, Toba, Sumatera Utara 22312</p>
                        <h4 style="color: #FF9E53; font-weight:bold">Social Media</h4>
                        <img src="{{ asset('image/ig.png') }}" width="50" class="mr-4" alt="">
                        <img src="{{ asset('image/fb2.png') }}" width="50" alt="">
                      </div>
                </div>
            </div>
            <div class="copyright mt-4">
                <div class="container">
                    <center>
                        <p style="color: white; font-weight:bold; font-size:16px;">Copyright © 2023. All rights reserved.</p>
                    </center>
                </div>
            </div>
        </footer>
        {{-- End of Footer --}}

        {{-- Script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit-icons.min.js"></script>
    <script src="{{ asset('js/rating.js') }}"></script>
    {{-- End of Script --}}
</body>
</html>