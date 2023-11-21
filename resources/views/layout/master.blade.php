<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Master</title>
        {{-- <link rel="stylesheet" href="{{ asset('css/uikit-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"> --}}
        <style>
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        footer {
            position: absolute;
            bottom: 0;
            background-color: #193A6F;
            color: white;
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />
    </head>
    <body style="background-color: rgb(166, 166, 255)">
        {{-- Navbar --}}
        <div class="container" ><br>
            <nav class="uk-navbar-container" style="border-radius: 18px;">
                <div class="uk-container">
                    <div uk-navbar>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active uk-margin-large-right">
                                    <a href="#"><img src="{{ asset('image/lbb.png') }}" alt="" width="80"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active">
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;">HOME</a></h5>
                                </li>
                                <br>
                                <li>
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;">PROFIL</a></h5>
                                </li>
                                <br>
                                <li>
                                    <p><a href="#" style="color: black; font-weight:bold; text-decoration: none;">KATEGORI WISATA<span uk-navbar-parent-icon></span></a></p>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#" style="color: black; font-weight:bold; text-decoration: none;">Active</a></li>
                                            <li><a href="#" style="color: black; font-weight:bold; text-decoration: none;">Item</a></li>
                                            <li><a href="#" style="color: black; font-weight:bold; text-decoration: none;">Item</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <br>
                                <li>
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;" ">WISATA DESA</a></h5>
                                </li>
                                <br>
                                <li>
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;" ">PAKET WISATA</a></h5>
                                </li>
                                <br>
                                <li>
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;">GALERI & EVENT</a></h5>
                                </li>
                                <br>
                                <li>
                                    <h5><a href="#" style="color: black; font-weight:bold; text-decoration: none;">LINIMASA</a></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
            {{-- End of Navbar --}}

        {{-- Footer --}}
        <footer style="margin-bottom:0 ; background-color: #193A6F; border: 1px solid black;">
            <div class="container">
                <div class="row">
                      <div class="col-sm mt-3 mb-1">
                        <img src="{{ asset('image/lbb.png') }}"  width="200" alt="lbb">
                      </div>
                      <div class="col-sm mt-5 mb-1">
                        <img src="{{ asset('image/del.png') }}" width="150" alt="del">
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