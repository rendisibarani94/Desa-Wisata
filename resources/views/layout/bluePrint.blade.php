<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Judul</title>
        {{-- <link rel="stylesheet" href="{{ asset('css/uikit-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"> --}}
        <style>
            html, body {
              margin: 0;
            padding: 0;
            height: 100%;
        }
        footer {
            position: relative;
            bottom: 0;
            background-color: #193A6F;
            color: white;
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        
  .navbar {
    margin-top: 0px;
    position: absolute;
    border: 1px solid black;
    top: 20px;
    left: 50%; /* Place the navbar in the center */
    transform: translateX(-50%);
    background-color: rgba(255, 255, 255); /* Set background color with opacity */
    /* padding: 10px 20px; */
    border-radius: 10px;
  }
  
  .navbar ul {
    list-style: none;
  }
  
  .navbar ul li {
    display: inline;
    margin-right: 20px;
  }
  
  .navbar ul li a {
    text-decoration: none;
    font-weight: bold;
    color: rgb(46, 39, 174) 42, 42); /* Adjust link color */
  }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />

  </head>
  <body style="background-color: rgb(26, 26, 243))55, 244)">
      {{-- Container --}}
      <div class="container">
        {{-- <!-- Navbar --> --}}
        <div class="header-container" style="position: relative;">
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
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">PROFIL</a>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        KATEGORI WISATA
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">WISATA ALAM</a></li>
                        <li><a class="dropdown-item" href="#">WISATA BUATAN</a></li>
                        <li><a class="dropdown-item" href="#">WISATA BUDAYA</a></li>
                      </ul>
                    </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">WISATA DESA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">PAKET WISATA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">GALERI & EVENT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LINIMASA</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
        {{-- <!-- End Navbar --> --}}
      
        {{-- Content --}}
        <div class="content" style="height: 100%; margin:-80px">
          <div class="container">
            <img src="{{ asset('image/fb.png') }}" alt="" width="500">
          </div>
        </div>
        {{-- End of Content --}}
      </div>
        {{-- End Of Container --}}
      
        {{-- Footer --}}
        <footer>
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
                        <p style="color: white; font-weight:bold; font-size:16px;">Copyright Jan dipegang</p>
                    </center>
                </div>
            </div>
        </footer>
        {{-- End of Footer --}}

    {{-- <script src"{{ asset('js/uikit-icons.js') }}"></script>
    <script src"{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src"{{ asset('js/uikit.js') }}"></script>
    <script src"{{ asset('js/uikit.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit-icons.min.js"></script>
    </body>
</html>