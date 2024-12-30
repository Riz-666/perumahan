@extends('admin.layout.layout')
@section('content')
    <form action="{{ Route('update_proses', $edit->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">{{ $judul }}</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"
                            value="{{ $edit->nama }}">
                    </div>
                    <div class="col">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Masukkan Email" value="{{ $edit->email }}">
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
                        <input type="text" name="no_ktp" class="form-control @error('ktp') is-invalid @enderror"
                            placeholder="Masukkan No. KTP" value="{{ $edit->no_ktp }}">
                        @error('ktp')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat"
                            value="{{ $edit->alamat }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Jenis Kelamin</label><br>
                        <select name="jenis_kelamin" class="form-control" aria-placeholder="Pilih jenis Kelamin">
                            <option value="Laki-Laki"
                                {{ old('jenis_kelamin', $edit->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                            </option>
                            <option value="Perempuan"
                                {{ old('jenis_kelamin', $edit->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Role</label>
                        <select name="role" class="form-control">
                            <option value="1" {{ old('role', $edit->role) == '1' ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ old('role', $edit->role) == '2' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">No. Telepon</label>
                        <input type="text" name="hp" class="form-control" placeholder="Masukan No. Telepon"
                            value="{{ $edit->hp }}">
                    </div>
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password"
                            value="{{ $edit->password }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                        <input type="text" name="foto" class="form-control" placeholder="{{ $edit->foto }}" disabled>
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
                        @if ($edit->foto)
                            <img src="{{ asset('storage/user-img/' . $edit->foto) }}" class="foto-preview" width="50%">
                            <p></p>
                        @else
                            <img src="{{ asset('storage/user-img/img-default.jpg') }}" class="foto-preview" width="50%">
                            <p></p>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col">
                        @if($edit->role == 1)
                        <a href="{{ Route('admin.data') }}" class="btn btn-sm btn-edit btn-dark">Kembali</a>
                        @else
                        <a href="{{ Route('pembeli.data') }}" class="btn btn-sm btn-edit btn-dark">Kembali</a>
                        @endif
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-sm btn-edit btn-primary">Tambahkan</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
