@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
        <a class="btn btn-primary btn-sm" href="{{ Route('tambah_rumah') }}"><i class="fa-solid fa-folder-plus"></i> Tambah Data</a>
        <a class="btn btn-dark btn-sm" href="{{ Route('form.cetak.properti') }}"><i class="fa-solid fa-print"></i> Cetak Data Pembeli</a>
    <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped table-responsive" data-show-header="false" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Rumah</th>
                            <th>Tipe Rumah</th>
                            <th>Luas Bangunan</th>
                            <th>Luas Tanah</th>
                            <th>Harga</th>
                            <th>Fasilitas</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($properti as $rumah)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="kolom"><p>{{ $rumah->nomor_rumah }}</p></td>
                                <td class="kolom"><p>{{ $rumah->tipe_rumah }}</p></td>
                                <td class="kolom"><p>{{ $rumah->luas_bangunan }}</p></td>
                                <td class="kolom"><p>{{ $rumah->luas_tanah }}</p></td>
                                <td class="kolom"><p>{{ $rumah->harga }}</p></td>
                                @if (!empty($rumah->fasilitas))
                                    <td class="scroll"><p>{{ $rumah->fasilitas }}</p></td>
                                @else
                                    <td class="scroll"><p>Fasilitas Belum Di Tambahkan</p></td>
                                @endif
                                <td class="scroll"><p>{{ $rumah->keterangan_rumah }}</p></td>
                                <td class="scroll">
                                    @if ($rumah->status == 'Tersedia')
                                        <span class="badge badge-success"> Tersedia</span>
                                    @elseif ($rumah->status == 'Terjual')
                                        <span class="badge badge-danger"> Tidak Tersedia</span>
                                    @elseif ($rumah->status == 'Booked')
                                        <span class="badge badge-warning"> Telah Di Pesan</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ Route('delete_data_properti', $rumah->id_rumah) }}" method="POST">
                                        @csrf
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ Route('edit.properti', $rumah->id_rumah) }}">
                                            <i class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ Route('edit.properti', $rumah->id_rumah) }}">
                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" id="show_confirm"
                                            data-konf-delete=""><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
