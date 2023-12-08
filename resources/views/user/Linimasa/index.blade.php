{{-- master layout --}}
@extends('layout.master')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Linimasa')
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
.clamp-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 2; /* Number of lines to display */
        line-height: 1.2; /* Adjust this value as needed */
        max-height: 2.4em; /* line-height * number of lines (1.2 * 2) */
    }
</style>
{{-- Style --}}
@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" uk-parallax="bgy: -200" data-src="{{ asset('image/all.png') }}" uk-img width="1920" height="1000">
    <div class="font mt-2">
        <div class="middle-font1">
            <h2 uk-parallax="y: 100,0"  style="color: black">Wisata Desa</h2>
            <h1 uk-parallax="y: 100,0" >Lumban Bul bul</h1>
        </div>
    </div>
</div>
<h1 class="text-center mb-lg-5" style="color:#193A6F">Linimasa Wisata</h1>
<div class="container">
    @php $counter = 0; @endphp
    {{-- if --}}
    {{-- foreach --}}
    @if($linimasa != null)
    @foreach($linimasa as $item)
    @if($counter % 4 == 0) <!-- Start a new row for every 4 items -->
    <div class="row mb-lg-5">
@endif
    <div class="card mb-3" style="width: 22rem;">
        <img src="{{ asset('linimasa/'.$item['gambar']) }}" class="rounded-3 p-3" alt="...">
        <div class="card-body">
          <p class="card-text clamp-text " >{{ $item['judul'] }}</p>
        <div class="d-flex justify-content-center mt-1"> 
            <a href="#" class="btn btn-primary">Selengkapnya..</a>
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
        <h1>Maaf Linimasa Belum Tersedia..</h1><br>
        </div>
        <div class="d-flex justify-content-center mt-1  mb-lg-5"> 
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali Ke Home yuk</a>
        </div>
    @endif
</div>

@endsection
