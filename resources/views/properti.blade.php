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
<div class="card card-properti container">
    <div class="row">
      <div class="col-md-6">
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h1 class="card-title">Tipe A 40/72</h1>
          <p class="card-text">Kamar Tidur 3 | Kamar Mandi | Dapur | Teras | Luas Tanah 666m</p>
          <p class="card-text"><b>Ready Stock/Siap Huni</b></p>
          <a href="" class="btn">Pesan Sekarang <b>&rarr;</b></a>
        </div>
      </div>
        <div class="col-md-6">
            <div class="img-properti">

            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
