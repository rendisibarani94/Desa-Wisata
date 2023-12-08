{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Tambah Galeri')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>
p{
            font-size: 20px;
            color: #193A6F;
        }
</style>
{{-- Style --}}

@section('content')
@section('content')
<div class="container mt-4">
    @php $counter = 0; @endphp <!-- Counter to track the number of items -->

    @if($galeri != null)
    @foreach($galeri as $item)
        @if($counter % 4 == 0) <!-- Start a new row for every 4 items -->
            <div class="row mb-lg-5">
        @endif

        

        <div class="col ">
            <div class="uk-inline justify-content-center">
                <form action="{{ route('deleteGaleri') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_galeri" value="{{ $item['id_galeri'] }}">
                <img src="{{ asset('galeri/' . $item['gambar']) }}" alt="" style="width: 343px; height: 300px; border-radius: 5px">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom" style="border-radius: 5px">
                    <h3 style="color: white; font-weight: 600">{{ $item['judul'] }}</h3>
                    <p style="color: white;">{{ $item['tanggal'] }}</p>
                </div>
                
            </div>
            <div class="d-flex justify-content-center mt-1"> 
                <button class="btn btn-danger mt-1" type="submit">Hapus Galeri</button>
            </div>
            </form>
        </div>
        
        @php $counter++; @endphp <!-- Increment the counter -->
        @if($counter % 4 == 0 || $loop->last) <!-- Close the row if it's the fourth item or the last item -->
            </div>
        @endif
    @endforeach
    @else
    <div class="d-flex justify-content-center mt-1"> 
    <h1>Tidak ada Data Galeri</h1><br>
    </div>
    <div class="d-flex justify-content-center mt-1"> 
    <a href="{{ route('addGaleri') }}" class="btn btn-primary">Tambahkan Data </a>
    </div>
    @endif
    
</div>


@endsection