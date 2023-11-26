{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Profil')
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
p,h{
    color: #193A6F;
}
p{
    font-size: 20px;
}
</style>
{{-- Style --}}

{{-- Content --}}
@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 style="color: black">Tentang Desa</h2>
            <h1>Lumban Bul bul</h1>
        </div>
    </div>
  </div>

  <div class="container mt-lg-5">
    <h1 class="d-flex justify-content-center" style="font-weight:625; color:#193A6F">Tentang Desa</h1><br>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('image/profil.png') }}" alt="" width="651" height="403">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 style="font-weight:700; color:#193A6F">Sejarah Terbentuknya Bulbul</h3>
                    <p>
                        Sejarah terbentuknya pantai Bulbul bisa dibilang cukup dramatis karena dahulu di tahun 2014 pantai yang indah ini belum ada, area pantau masih dipenuhi dengan semak belukar dan bambu serta masih jadi tempat keramba dan jaring apung dari nelayan setempat.
                    </p>
                    <p>
                        Namun pada saat itu kondisi masyarakat yang merupakan seorang petani dan nelayan ini berada pada garis kemiskinan dimana banyak anak-anak yang putus sekolah dan kekurangan gizi. Melihat kondisi seperti ini masyarakat sekitar berunding mencari jalan keluar untuk mengatasi kemiskinan mereka. Akhirnya diputuskanlah untuk menjadikan area berpasir putih ini sebagai sebuah pantai.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p>
        Pantai Lumban Bulbul, persembahan Desa Lumban Bulbul, Balige, menemukan keindahan baru setelah masyarakat bersatu untuk mengembangkan pariwisata Toba.
        Mulai dari resmi menjadi Pantai Ancol hingga usaha keras mengatasi tantangan, kini Pantai Bulbul bersinar sebagai destinasi eksotis di Kabupaten Toba,
        menyuguhkan pesona alam yang memesona dan menarik wisatawan untuk menjelajahi kekayaan indahnya.
    </p><br>
    <h1 class="text-center" style="font-weight:625">Potensi Wisata</h1>
    <h2 style="color:#F98125; ">
        Panorama Alam
    </h2>
    <p>
        Selamat datang di Pantai Bulbul, destinasi wisata serba lengkap di tepi Danau Toba! Dengan pasir putih seluas 865 meter, air tawar yang tenang cocok untuk olahraga air, serta panorama alam yang indah, Pantai Bulbul menjadi tempat ideal untuk liburan keluarga. Nikmati udara sejuk dan suasana asri di sekitar persawahan, sambil menikmati keramahan penduduk setempat di kedai-kedai sekitar. Tidak hanya itu, wahana permainan air seperti banana boat, speed boat, perahu, dan lainnya menambah kegembiraan di destinasi ini. Temukan harmoni alam dan keseruan aktivitas air di Pantai Bulbul!
    </p>
    <h2 style="color:#F98125">
        Potensi Pantai
    </h2>
    <p>
        Selamat datang di Pantai Lumban Bulbul, surga tersembunyi di tepi Danau Toba! Nikmati keindahan hamparan pasir putih dan air tawar yang begitu jernih di destinasi wisata ini. Dengan lokasinya yang hanya 2 km dari Balige, Anda dapat merasakan pesona keindahan alam dalam waktu 10 menit saja. Temukan keunikan desa wisata ini yang mulai berkembang sejak tahun 2014, menggabungkan kearifan lokal dan dukungan pemerintah untuk menciptakan pengalaman tak terlupakan di Pantai Lumban Bulbul. Selamat menjelajahi keajaiban alam dan budaya yang memikat di sini!
    </p>
    <h2 style="color:#F98125">
        Buatan Manusia
    </h2>
    <p>
        Pantai Bulbul, dengan keindahan alamnya yang menakjubkan, telah menjadi daya tarik utama bagi wisatawan. Dalam setahun setelah dibuka, pantai ini telah ramai dikunjungi baik oleh wisatawan lokal maupun dari luar daerah. Meskipun tanpa tiket masuk, pembayaran hanya dikenakan untuk parkir kendaraan.
    </p>
    <p>
        Fokus pengembangan terletak pada pembangunan fasilitas pendukung wisata untuk meningkatkan kunjungan. Akses mudah dari Kota Balige, hanya 10 menit perjalanan, membuat pantai ini selalu ramai terutama pada akhir pekan. Wisatawan dapat bersantai di pondok pinggir pantai, menikmati pemandangan Danau Toba yang asri, dan mencicipi berbagai hidangan terjangkau, mulai dari masakan ikan hingga nasi goreng.
    </p>
    <p>
        Selain berenang dan menyewa wahana permainan, pengunjung juga dapat menikmati pasir putih, berjalan di pinggiran pantai, dan menyaksikan matahari terbenam yang memukau. Keindahan Pantai Bulbul juga terabadikan melalui beragam spot foto dan kafe di sekitarnya. Potensi buatan manusia, seperti wahana permainan dan fasilitas pendukung, menambah daya tarik pantai ini sebagai destinasi wisata yang memikat.
    </p><br>
    <div class="row mb-5">
        <div class="col-md-6">
            <h3 class="text-center" style="font-weight: 650">
                Peta Lokasi Desa Lumban Bulbul
            </h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7972.972003963246!2d99.07233545000001!3d2.3418795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e041198ee45d1%3A0x7438dfa4c9a63950!2sPantai%20Lumban%20Bul-bul%20Balige!5e0!3m2!1sid!2sid!4v1700965270007!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
        <div class="col-md-6">
            <h3 class="text-center" style="font-weight: 650">
                Data Desa Lumban Bulbul
            </h3>
            <div class="card">
                <div class="card-body">
                    <div class="card text-center mb-5">
                        <div class="cart-body mb-4">
                        {{-- <a href="#" class="btn text-center" style="background-color: rgb(255, 42, 42); color:white; width:200px; height:50px; text-decoration:none"><h3 style="color: white; font-weight:600">Download PDF</h3></a> --}}
                            <a href="#" class="btn btn-danger mt-4" style="width:200px; height:50px; font-weight:600; text-decoration:none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                    <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                                    <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                                  </svg>
                                  Download PDF
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="card-title text-center" style="color: #F98125">Hubungi Kami</h3>
                        <p class="card-text">Kelompok sadar wisata (Pokdarwis) Lumban Bulbul</p>
                        <p>Pengelola desa wisata Lumban Bulbul</p>
                        <a href="#" class="btn" style="background-color: #F98125; color:white; text-decoration:none">+62 361 154874</a>
                    </div>
                  
                </div>
              </div>
        </div>
    </div>
</div>


@endsection
{{-- Content --}}
