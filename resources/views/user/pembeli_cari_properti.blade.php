@extends('user.layout.layout')
@section('content')

@if(isset($rumah) && $rumah->count() > 0)
@foreach ($rumah as $rumah)
<div class="card card-properti-search container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">
                <h1 class="card-title">{{ $rumah->tipe_rumah }}/{{ $rumah->luas_tanah }}</h1>
                @if (!empty($rumah->fasilitas))
                <p class="card-text">{{ $rumah->fasilitas }}</p>
                @else
                <p class="card-text">Fasilitas Belum Di Tambahkan</p>
                @endif
                <p>{{ $rumah->keterangan_rumah }}</p>
                <h2 class="Harga">IDR. {{ $rumah->harga }}</h2>
                <p class="card-status"><b>
                    @if ($rumah->status == 'Tersedia')
                        <p class="tersedia">{{ $rumah->status }}</p>
                    @elseif ($rumah->status == 'Terjual')
                        <p class="terjual">{{ $rumah->status }}</p>
                    @elseif ($rumah->status == 'Booked')
                        <p class="booked">{{ $rumah->status }}</p>
                    @endif
                </b></p>

                <br>
                <a href="" class="btn">Pesan Sekarang<b> &rarr;</b></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-properti">
                @if ($rumah->foto)
                    <img src="{{ asset('storage/properti-img/' . $rumah->foto) }}" class="foto-preview" width="100%" height="100%">
                    <p></p>
                @else
                    <img src="{{ asset('storage/properti-img/img-default.jpg') }}" class="foto-preview" width="100%" height="100%">
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div class="container">
<center>
<div class="card null-search text-center">
    <div class="card-body">
      <h5 class="card-title">Ups!!!</h5>
      <p class="card-text">Tidak Ada Rumah dengan Kriteria tersebut.</p>
      <a href="/" class="btn btn-danger">Kembali ?</a>
    </div>
  </div>
</center>
</div>
@endif
@endsection
