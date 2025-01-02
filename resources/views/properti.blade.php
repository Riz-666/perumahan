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
                    <div class="container mt-5">
                        <div class="search-box">
                            <form action="{{ Route('search.rumah') }}" method="GET" class="row w-100">
                                <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">

                                    <select name="tipe_rumah" class="form-control">
                                        <option value="" selected>Cari Tipe Rumah</option>
                                    @foreach ($properti as $search)
                                        <option value="{{ $search->tipe_rumah }}">{{ $search->tipe_rumah }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">
                                    <select name="harga_min" class="form-control">
                                        <option value="">Pilih Harga Minimum</option>
                                        <option value="50000000"{{ request('harga_min') == '50000000' ? 'selected' : '' }}>50000000</option>
                                        <option value="100000000"{{ request('harga_min') == '100000000' ? 'selected' : '' }}>100000000</option>
                                        <option value="200000000"{{ request('harga_min') == '200000000' ? 'selected' : '' }}>200000000</option>
                                        <option value="300000000"{{ request('harga_min') == '300000000' ? 'selected' : '' }}>300000000</option>
                                        <option value="400000000"{{ request('harga_min') == '400000000' ? 'selected' : '' }}>400000000</option>
                                        <option value="500000000"{{ request('harga_min') == '500000000' ? 'selected' : '' }}>500000000</option>
                                        <option value="600000000"{{ request('harga_min') == '600000000' ? 'selected' : '' }}>600000000</option>
                                        <option value="700000000"{{ request('harga_min') == '700000000' ? 'selected' : '' }}>700000000</option>
                                        <option value="800000000"{{ request('harga_min') == '800000000' ? 'selected' : '' }}>800000000</option>
                                        <option value="900000000"{{ request('harga_min') == '900000000' ? 'selected' : '' }}>900000000</option>
                                        <option value="1000000000"{{ request('harga_min') == '1000000000' ? 'selected' : '' }}>1000000000</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">
                                    <select name="harga_max" class="form-control">
                                        <option value="">Pilih Harga Maximum</option>
                                        <option value="50000000"{{ request('harga_min') == '50000000' ? 'selected' : '' }}>50000000</option>
                                        <option value="100000000"{{ request('harga_min') == '100000000' ? 'selected' : '' }}>100000000</option>
                                        <option value="200000000"{{ request('harga_min') == '200000000' ? 'selected' : '' }}>200000000</option>
                                        <option value="300000000"{{ request('harga_min') == '300000000' ? 'selected' : '' }}>300000000</option>
                                        <option value="400000000"{{ request('harga_min') == '400000000' ? 'selected' : '' }}>400000000</option>
                                        <option value="500000000"{{ request('harga_min') == '500000000' ? 'selected' : '' }}>500000000</option>
                                        <option value="600000000"{{ request('harga_min') == '600000000' ? 'selected' : '' }}>600000000</option>
                                        <option value="700000000"{{ request('harga_min') == '700000000' ? 'selected' : '' }}>700000000</option>
                                        <option value="800000000"{{ request('harga_min') == '800000000' ? 'selected' : '' }}>800000000</option>
                                        <option value="900000000"{{ request('harga_min') == '900000000' ? 'selected' : '' }}>900000000</option>
                                        <option value="1000000000"{{ request('harga_min') == '1000000000' ? 'selected' : '' }}>1000000000</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-2 mb-lg-0 d-flex">
                                    <input type="text" name="keterangan" class="form-control" placeholder="Cari Berdasarkan Kriteria Tertentu">
                                    <button type="submit" class="btn btn-primary ms-2">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
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
                            <img src="{{ asset('storage/properti-img/img-default.jpg') }}" class="foto-preview" width="100%" height="100%">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
