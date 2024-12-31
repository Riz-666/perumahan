@extends('admin.layout.layout')
@section('content')
<form action="{{ Route('add.fasilitas') }}" method="post" enctype="multipart/form-data">
    @csrf
    <center>
        <div class="card card-fasilitas">
            <div class="card-body">
                <h2 class="text-center">{{ $judul }}</h2>
                <br>
                <br>
                <div class="row row-fasilitas">
                    <div class="col">
                        <label for="">Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control" placeholder="Masukan Nama Fasilitas">
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-sm btn-tambah btn-primary">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    </form>
@endsection
