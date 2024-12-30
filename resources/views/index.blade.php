@extends('layout.layout')

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
                        <button class="btn btn-lg">Temukan Rumah</button>
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
                <select class="form-control container" name="">
                    <option value="">opt 1</option>
                    <option value="">opt 2</option>
                    <option value="">opt 3</option>
                    <option value="">opt 4</option>
                </select>
            </div>
        </div>
    </div>
    <center>
        <div class="row home-reco">
            @foreach ($properti as $rumah)
            <div class="col-sm">
                <div class="card item-reco">
                    <div class="card-body">
                        <img src="{{ $rumah->foto }}" width="100%"
                            height="50%">
                        <h5 class="card-title">{{ $rumah->harga }}</h5>
                        <p class="card-text">{{ $rumah->keterangan_rumah }}</p>
                        <p class="card-status">{{ $rumah->status }}</p>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </center>
</div>

    @endsection
