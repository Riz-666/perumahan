@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card table-trx">
            <div class="card-body">
                <div class="card-title text-center">
                    <h4>{{ $judul }}</h4>
                    <hr>
                </div>
                <a class="btn btn-dark btn-sm" href="{{ Route('form.cetak.transaksi') }}"><i class="fa-solid fa-print"></i> Cetak Data Pembeli</a>
                <div class="table-responsive">
                    <table id="myTable" class="table table_trx table-striped table-bordered" data-show-header="false">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID User</th>
                                <th>ID Rumah</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>Tipe Rumah</th>
                                <th>Metode Pembayaran</th>
                                <th>Status</th>
                                <th>Harga/Unit</th>
                                <th>Jumlah Pesan</th>
                                <th>Total Pembayaran</th>
                                <th>Tangga Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trx as $trx)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $trx->id_user }}</td>
                                    <td>{{ $trx->id_rumah }}</td>
                                    <td>{{ $trx->nama }}</td>
                                    <td>{{ $trx->hp }}</td>
                                    <td>{{ $trx->tipe_rumah }}</td>
                                    <td>{{ $trx->pembayaran }}</td>
                                    <td>{{ $trx->status }}</td>
                                    <td>{{ $trx->harga }}</td>
                                    <td>{{ $trx->jumlah }}</td>
                                    <td>{{ $trx->total_pembayaran }}</td>
                                    <td>{{ $trx->tanggal_transaksi }}</td>
                                    <td>
                                        <form action="{{ Route('delete_data_transaksi', $trx->id) }}" method="POST">
                                            @csrf

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
        </div>
    </div>
@endsection
