@extends('layout.layout')

@section('content')
    <div class="row select-properti">
        <div class="col">
            <div class="detail-properti-select">
                <h1>
                    Temukan
                    <span>
                        Rumah Impian
                    </span>
                </h1>
                <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eaque iste, dolorum
                    labore ducimus voluptatibus asperiores saepe magni, iure qui omnis sequi aliquid rem eos placeat optio
                    unde magnam dicta?</p>
                <select class="form-control container" name="">
                    <option value="">opt 1</option>
                    <option value="">opt 2</option>
                    <option value="">opt 3</option>
                    <option value="">opt 4</option>
                </select>
            </div>
        </div>
    </div>
    @foreach ($properti as $rumah)
        <div class="card card-properti container">
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
                            <img src="{{ asset('storage/user-img/img-default.jpg') }}" class="foto-preview" width="100%" height="100%">
                            <p></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
