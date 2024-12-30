@extends('admin.layout.layout')
@section('content')
<form action="{{ Route('add.properti') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">{{ $judul }}</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nomor Rumah</label>
                        <input type="text" name="nomor_rumah" class="form-control" placeholder="Masukan No. Rumah">
                    </div>
                    <div class="col">
                        <label for="">Tipe Rumah</label><br>
                        <input type="text" class="form-control" name="tipe_rumah" placeholder="Masukan Tipe Rumah">
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Luas Bangunan</label>
                        <input type="number" name="luas_bangunan" class="form-control" placeholder="Masukkan Luas Bangunan">
                    </div>
                    <div class="col">
                        <label for="">Luas Tanah</label>
                        <input type="number" name="luas_tanah" class="form-control" placeholder="Masukan Luas Tanah">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga">
                    </div>
                    <div class="col">
                        <label for="">Fasilitas</label>
                        <select name="fasilitas[]" multiple data-live-search="true" class="form-control nice-select" data-control="select2" id="inpFasilitas">
                            @foreach ($fasilitas as $fr)
                                <option value="{{ $fr->nama_fasilitas }}">{{ $fr->nama_fasilitas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Status</label>
                        <select name="status" data-live-search="true" class="form-control nice-select" data-control="select2">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Booked">Telah Di Pesan</option>
                            <option value="Terjual">Terjual</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Keterangan Rumah</label>
                        <input type="textarea" name="keterangan_rumah" class="form-control" id="ckeditor" placeholder="Masukan Keterangan Rumah">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                        @error('foto')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
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
    </form>
@endsection
