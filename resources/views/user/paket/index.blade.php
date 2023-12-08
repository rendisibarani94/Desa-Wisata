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


<div class="container">
  @php $counter = 0; @endphp
  {{-- if --}}
  {{-- foreach --}}
  @if($paket != null)
  @foreach($paket as $item)
  @if($counter % 4 == 0) <!-- Start a new row for every 4 items -->
  <div class="row mb-lg-5">
@endif
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
              <h5 style="font-weight: 600">Rp.{{ $item['harga'] }}</h5>
          </div>
        </div>

         <div class="row mb-3">
          <div class="col-3 a">
              <img width="43" height="40" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="bed"/>
          </div>
          <div class="col">
              <h5 style="font-weight: 600">{{ $item['lama_kegiatan'] }}</h5>
          </div>
        </div>

        <div class="text-center">
          <a href="{{ route('details.paketWisata',$item['id_paket_wisata']) }}" class="btn btn-primary items-center" style="text-decoration: none">Selengkapnya</a>
        </div>
      </div>
    </div>
</div>
  @php $counter++; @endphp <!-- Increment the counter -->

      @if($counter % 4 == 0 || $loop->last) <!-- Close the row if it's the fourth item or the last item -->
          </div>
      @endif
      {{-- endforeach --}}
  @endforeach

  @else
  <div class="d-flex justify-content-center mt-1"> 
      <h1>Maaf Paket Wisata Belum Tersedia..</h1><br>
      </div>
      <div class="d-flex justify-content-center mt-1  mb-lg-5"> 
      <a href="{{ route('home') }}" class="btn btn-primary">Kembali Ke Home yuk</a>
      </div>
  @endif
</div>



@endsection