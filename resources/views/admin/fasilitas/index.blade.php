@extends('admin.layout.layout')
@section('content')
        <a class="btn btn-primary btn-sm" href="{{ Route('tambah_fasilitas') }}"><i class="fa-solid fa-folder-plus"></i> Tambah
            Data</a>
        <div class="table-responsive">
            <table id="fasilitasTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fasilitas</th>
                        <th>Di Tambahkan Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $fas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fas->nama_fasilitas }}</td>
                            <td>{{ $fas->created_at }}</td>

                            <td>
                                <form action="{{ Route('delete_data_fasilitas', $fas->id_fasilitas) }}" method="POST">
                                    @csrf

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
