@extends('admin.layout.layout')
@section('content')
    <form action="{{ Route('add.media') }}" method="post" enctype="multipart/form-data">
        @csrf
        <center>
            <div class="card card-media-show">
                <div class="card-body">
                    <h2 class="text-center">{{ $judul }}</h2>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h4>Title Foto</h4>
                            <p>{{ $show->title }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h4>Keterangan Foto</h4>
                            <p>{{ $show->keterangan_foto }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h4>Foto</h4>
                            <br>
                            @if ($show->foto)
                                <img src="{{ asset('storage/media-img/' . $show->foto) }}" class="foto-preview"
                                    width="50%">
                            @else
                                <img src="{{ asset('storage/media-img/img-default.jpg') }}" class="foto-preview"
                                    width="50%">
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            <a href="{{ Route('media_data') }}" class="btn btn-sm btn-back btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </form>
@endsection
