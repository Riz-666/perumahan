@extends('admin.layout.layout')
@section('content')
    <form action="{{ Route('prosesEdit.properti',$properti->id_rumah) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">{{ $judul }}</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nomor Rumah</label>
                        <input type="text" name="nomor_rumah" class="form-control" placeholder="Masukan No. Rumah" value="{{ $properti->nomor_rumah }}">
                    </div>
                    <div class="col">
                        <label for="">Tipe Rumah</label><br>
                        <input type="text" class="form-control" name="tipe_rumah" placeholder="Masukan Tipe Rumah" value="{{ $properti->tipe_rumah }}">
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Luas Bangunan</label>
                        <input type="number" name="luas_bangunan" class="form-control"
                            placeholder="Masukkan Luas Bangunan" value="{{ $properti->luas_bangunan }}">
                    </div>
                    <div class="col">
                        <label for="">Luas Tanah</label>
                        <input type="number" name="luas_tanah" class="form-control" placeholder="Masukan Luas Tanah" value="{{ $properti->luas_tanah }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga" value="{{ $properti->harga }}">
                    </div>
                    <div class="col">
                        <label for="">Fasilitas</label>
                        <select name="fasilitas[]" multiple data-live-search="true" class="form-control nice-select" data-control="select2" id="inpFasilitas">
                            @foreach ($fasilitas as $fr)
                                @if (old('nama_fasilitas', $properti->nama_fasilitas) == $fr->id_rumah)
                                    <option value="{{ $fr->nama_fasilitas }}">{{ $fr->nama_fasilitas }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Status</label>
                        <select name="status" data-live-search="true" class="form-control nice-select" data-control="select2">
                            <option value="Tersedia"{{ old('status', $properti->status) == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                            <option value="Booked"{{ old('status', $properti->status) == 'Booked' ? 'selected' : '' }}>Telah Di Pesan</option>
                            <option value="Terjual" {{ old('status', $properti->status) == 'Terjual' ? 'selected' : '' }}>Terjual</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Keterangan Rumah</label>
                        <textarea name="keterangan_rumah" class="form-control" id="ckeditor">{{ old('detail', $properti->keterangan_rumah) }}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
                            placeholder="Masukkan Foto">
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
                        @if ($properti->foto)
                        <img src="{{ asset('storage/properti-img/' . $properti->foto) }}" class="foto-preview" width="50%">
                        <p></p>
                    @else
                        <img src="{{ asset('storage/properti-img/img-default.jpg') }}" class="foto-preview" width="50%">
                    @endif
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-sm btn-tambah btn-primary">Perbarui Data</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
