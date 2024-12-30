@extends('admin.layout.layout')
@section('content')
    <div class="table-responsive">
        <a class="btn btn-primary btn-sm" href=""><i class="fa-solid fa-user-plus"></i> Tambah
            Data</a>
        <div class="table-responsive">
            <table id="propertiTable" class="table table-striped table-bordered" style="table-layout: fixed; width:100%;">
                <thead class="th_fasilitas">
                    <tr>
                        <th>No</th>
                        <th>Nama Fasilitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="tb_fasilitas">
                    @foreach ($fasilitas as $fas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fas->nama_fasilitas }}</td>

                            <td>
                                <form action="{{ Route('delete_data_properti', $fas->id_fasilitas) }}" method="POST">
                                    @csrf
                                    <a class="btn btn-warning btn-sm" href="{{ Route('edit.properti', $fas->id_fasilitas) }}">
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
