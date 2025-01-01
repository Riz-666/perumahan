@extends('layout.layout')
@section('content')
    <form action="{{ Route('proses.daftar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <center>
            <div class="container">
                <div class="card card-register">
                    <div class="card-body">
                        <div class="card-title">{{ $judul }}</div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                            </div>
                            <div class="col">
                                <label class="form-label">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                                @error('email')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                     {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">No. KTP</label>
                                <input type="text" name="no_ktp" class="form-control @error('ktp') is-invalid @enderror"
                                    placeholder="Masukkan No. KTP">
                                @error('ktp')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <select name="jenis_kelamin" class="form-control" aria-placeholder="Pilih jenis Kelamin">
                                    <option value="" selected>- Pilih Jenis Kelamin -</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
                            </div>
                                <input type="hidden" name="role" class="form-control" value="2">

                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">No. Telepon</label>
                                <input type="text" name="hp" class="form-control" placeholder="Masukan No. Telepon">
                            </div>
                            <div class="col">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Foto</label>
                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                                @error('foto')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="" alt="">
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

            </div>
        </center>
    </form>
@endsection
