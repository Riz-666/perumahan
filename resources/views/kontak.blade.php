@extends('layout.layout')

@section('content')

<body class="bg-kontak">
    <div class="row grid-kontak">
        <div class="col-sm text-title">
            <h1>Butuh Konsultasi..? <br>Silahkan Kontak Kami,<br> Kami Siap Membantu</h1>
            <br>
            <br>
            <h5>Kontak</h5>
            <p><i class="fa fa-map"></i> JL. Pejuang Pelajar123, Manunggal Bogor Indonesia</p>
            <p><i class="fa fa-phone"></i> 083894417921</p>
            <p><i class="fa fa-envelope"></i> rizthepublic666@gmail.com</p>
            <br>
            <br>
            <h5>Social Media</h5>
            <p><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i> @devangga.rizki</p>
        </div>
        <div class="col-sm grid-card-kontak">
            <div class="card card-kontak">
                <div class="card-body">
                    <h2 class="title-kontak">Ada Pertanyaan?</h2>
                        <div class="mb-3">
                          <input type="email" class="form-control" placeholder="Maukan Email Anda Disini" id="exampleInputEmailKontak" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Pertanyaan Anda" id="exampleInputPasswordKontak">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
    </div>
</body>
@endsection
