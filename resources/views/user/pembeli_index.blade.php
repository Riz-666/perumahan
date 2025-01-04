@extends('user.layout.layout')

@section('content')
    <section class="slider_section">
        <div class="container-fluid">
            <div class="row header-content">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h1>
                            Membantu Temukan <br>
                            <span>
                                Rumah Impian
                            </span>
                        </h1>
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid deserunt
                            officia aliquam, distinctio mollitia repellendus? Deserunt pariatur eum
                            voluptates neque? Officia unde temporibus totam facere rem, dolor deserunt
                            quidem ut.
                        </p>
                        <a href="{{ Route('user_Properti') }}" class="btn btn-lg">Temukan Rumah</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row layanan-kami">
        <div class="col">
            <div class="header-layanan">
                <h1>Layanan Kami</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <center>
            <div class="row">
                <div class="col-sm">
                    <div class="card card-left">
                        <div class="card-body">
                            <img src="https://cdn.icon-icons.com/icons2/317/PNG/512/house-icon_34406.png" width="50%"
                                height="50%">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://cdn.icon-icons.com/icons2/317/PNG/512/house-icon_34406.png" width="50%"
                                height="50%">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card card-right">
                        <div class="card-body">
                            <img src="https://cdn.icon-icons.com/icons2/317/PNG/512/house-icon_34406.png" width="50%"
                                height="50%">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <div class="row select-home">
        <div class="col">
            <div class="detail-select">
                <h1>
                    Temukan
                    <span>
                        Rumah Impian
                    </span>
                </h1>
                <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eaque iste, dolorum labore ducimus voluptatibus asperiores saepe magni, iure qui omnis sequi aliquid rem eos placeat optio unde magnam dicta?</p>
                <div class="container mt-5">
                    <div class="search-box">
                        <form action="{{ Route('user.search.rumah') }}" method="GET" class="row w-100">
                            <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">

                                <select name="tipe_rumah" class="form-control">
                                    <option value="" selected>Cari Tipe Rumah</option>
                                @foreach ($rumah as $search)
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
    <br>
    <center>
        @foreach ($rumah->chunk(3) as $index)
        <div class="row home-reco">
            @foreach ($index as $rumah)
            <div class="col-sm">
                <div class="card item-reco">
                    <div class="card-body">
                        @if ($rumah->foto)
                            <img src="{{ asset('storage/properti-img/' . $rumah->foto) }}" class="foto-preview" >
                        @else
                            <img src="{{ asset('storage/properti-img/img-default.jpg') }}" class="foto-preview">
                        @endif
                        <h5 class="card-title">{{ $rumah->harga }}</h5>
                        <p class="card-text">{!! $rumah->keterangan_rumah !!}</p>
                        <p class="card-status">{{ $rumah->status }}</p>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <br>
        @endforeach
    </center>
</div>
<br>
    @endsection
