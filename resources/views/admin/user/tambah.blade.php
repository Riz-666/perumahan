@extends('admin.layout.layout')
@section('content')
<form action="{{ Route('add.user') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card">
    <div class="card-body">
            <h2 class="text-center">Tambah data User/Admin</h2>
            <br>
        <div class="row">
            <div class="col">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
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
                <label for="">No. KTP</label>
                <input type="text" name="no_ktp" class="form-control @error('ktp') is-invalid @enderror" placeholder="Masukkan No. KTP">
                @error('ktp')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="">Jenis Kelamin</label><br>
                <select name="jenis_kelamin" class="form-control" aria-placeholder="Pilih jenis Kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col">
                <label for="">Role</label>
                <select name="role" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="">No. Telepon</label>
                <input type="text" name="hp" class="form-control" placeholder="Masukan No. Telepon">
            </div>
            <div class="col">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password">
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
</form>
@endsection
