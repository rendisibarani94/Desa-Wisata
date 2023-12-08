{{-- master layout --}}
@extends('layout.admin')
{{-- master layout --}}

{{-- Judul Tab --}}
@section('judul_tab','Tambah Linimasa')
{{-- Judul Tab --}}

{{-- Style --}}
@section('additional_style')
<style>

</style>
{{-- Style --}}

@section('content')
<div class="container">
    <div class="d-flex mt-1"> 
        <h1>Tambah Linimasa</h1><br>
        </div>
        <div class="d-flex mt-1  mb-lg-5"> 
        <a href="{{ route('addLinimasa') }}" class="btn btn-primary">Tambah Linimasa</a>
        </div>
    @php $counter = 0; @endphp
    {{-- if --}}
    {{-- foreach --}}
    @if($linimasa != null)
    @foreach($linimasa as $item)
    @if($counter % 4 == 0) <!-- Start a new row for every 4 items -->
    <div class="row mb-lg-5">
@endif
    <div class="col">
    <div class="card mb-3" style="width: 22rem; background-color:#9c9c9cb8">
        <img src="{{ asset('linimasa/'.$item['gambar']) }}" style="height: 290px; width:343px" class="rounded-3 p-2" alt="...">
        <div class="card-body">
          <p class="card-text clamp-text" style="font-size: 16px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" >{{ $item['judul'] }}</p>
        <div class="row">
            <div class="col">
                <a href="{{ route('user.article',$item['id_linimasa']) }}" class="btn btn-primary">Selengkapnya..</a>
            </div> 
            <div class="col">
                <a href="{{ route('deleteLinimasa',$item['id_linimasa']) }}" class="btn btn-danger">Delete Item</a>
            </div> 
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
        <h1>Maaf Linimasa Belum Tersedia..</h1><br>
        </div>
        <div class="d-flex justify-content-center mt-1  mb-lg-5"> 
        <a href="{{ route('addLinimasa') }}" class="btn btn-primary">Tambah Linimasa</a>
        </div>
    @endif
</div>

@endsection