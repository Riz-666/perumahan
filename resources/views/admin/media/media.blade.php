@extends('admin.layout.layout')
@section('content')
        <a class="btn btn-primary btn-sm" href="{{ Route('tambah_media') }}"><i class="fa-solid fa-folder-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table id="propertiTable" class="table table-bordered table-striped table-responsive" data-show-header="false" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title Foto</th>
                            <th>Foto</th>
                            <th>Keterangan Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($media as $foto)
                            <tr>
                                {{-- <td>
                                    <ul class="list-group">
                                        <li class="list-group-item">{{ $loop->iteration }}</li>
                                    </ul>
                                </td> --}}
                                <td>{{ $loop->iteration }}</td>
                                <td class="kolom"><p>{{ $foto->title }}</p></td>
                                <td class="kolom"><p>{{ $foto->foto }}</p></td>
                                <td class="scroll"><p>{{ $foto->keterangan_foto }}</p></td>
                                <td>
                                    <form action="{{ Route('delete_data_media', $foto->id_foto) }}" method="POST">
                                        @csrf
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ Route('edit.properti', $foto->id_foto) }}">
                                            <i class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ Route('edit.properti', $foto->id_foto) }}">
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
        @endsection