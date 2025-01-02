@extends('admin.layout.layout')
@section('content')
<form action="{{ Route('add.media') }}" method="post" enctype="multipart/form-data">
    @csrf
    <center>
        <div class="card card-fasilitas">
            <div class="card-body">
                <h2 class="text-center">{{ $judul }}</h2>
                <br>
                <br>
                <div class="row row-fasilitas">
                    <div class="col">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Masukan Judul Foto">
                    </div>
                </div>
                <br>
                <div class="row row-fasilitas">
                    <div class="col">
                        <label for="">Keterangan Foto</label>
                        <textarea name="keterangan_foto" class="form-control" id="ckeditor"></textarea>
                    </div>
                </div>
                <br>
                <div class="row row-fasilitas">
                    <div class="col">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control" placeholder="Masukan Foto">
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
