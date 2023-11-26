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
    <h1 class="d-flex justify-content-center" style="font-weight:625"
    >Tentang Desa</h1><br>

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
    <div class="row">
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
                    <div class="text-center">
                        <h3 class="card-title text-center" style="color: #F98125">Hubungi Kami</h3>
                        <p class="card-text">Kelompok sadar wisata (Pokdarwis) Lumban Bulbul</p>
                        <p>Pengelola desa wisata Lumban Bulbul</p>
                        <a href="#" class="btn" style="background-color: #F98125; color:white">+62 361 154874</a>
                    </div>
                  
                </div>
              </div>
        </div>
    </div>
</div>


@endsection
{{-- Content --}}
