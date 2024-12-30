@extends('admin.layout.layout')
@section('content')
    <div class="table-responsive">
        <a class="btn btn-primary btn-sm" href="{{ Route('tambah_rumah') }}"><i class="fa-solid fa-user-plus"></i> Tambah
            Data</a>
        <div class="table-responsive">
                <table id="propertiTable" class="table table-bordered table-striped table-responsive" data-show-header="false" >
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
                                {{-- <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">{{ $loop->iteration }}</li>
                                    </ul>
                                </td> --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rumah->nomor_rumah }}</td>
                                <td>{{ $rumah->tipe_rumah }}</td>
                                <td>{{ $rumah->luas_bangunan }}</td>
                                <td>{{ $rumah->luas_tanah }}</td>
                                <td class="scroll"><p>{{ $rumah->harga }}</p></td>
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
                                <form action="{{ Route('delete_data_properti', $rumah->id_rumah) }}" method="POST">
                                    @csrf
                                <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ Route('edit.properti', $rumah->id_rumah) }}">
                                            <i class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ Route('edit.properti', $rumah->id_rumah) }}">
                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" id="show_confirm"
                                            data-konf-delete=" "><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endsection
