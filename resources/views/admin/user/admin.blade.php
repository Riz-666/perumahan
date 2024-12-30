@extends('admin.layout.layout')
@section('content')
<div class="table-responsive">
<a class="btn btn-primary btn-sm" href="{{ Route('tambah_data') }}"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
<div class="table-responsive">
<table id="myTable" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No. KTP</th>
			<th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Role</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
        @foreach ($admin as $adm)
        <tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $adm->nama }}</td>
			<td>{{ $adm->no_ktp }}</td>
			<td>{{ $adm->alamat }}</td>
            <td>{{ $adm->jenis_kelamin }}</td>
			<td>
                @if($adm->role == 1)
                    <span class="badge badge-primary"> Admin</span>
                @else
                    <span class="badge badge-secondary"> No Role</span>
                @endif
            </td>
            <td>{{ $adm->hp }}</td>
            <td>
                <form action="{{ Route('delete.data', $adm->id) }}" method="POST">
                    @csrf
                    <a class="btn btn-warning btn-sm" href="{{ Route('edit_data', $adm->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <button type="submit" class="btn btn-danger btn-sm" id="show_confirm" data-konf-delete="{{ $adm->nama }}"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
		</tr>
        @endforeach
	</tbody>
</table>
</div>
@endsection
