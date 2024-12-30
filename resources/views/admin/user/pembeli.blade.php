@extends('admin.layout.layout')
@section('content')

<a class="btn btn-primary btn-sm" href="{{ Route('tambah_data') }}"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
<div class="table-responsive">
<table id="myTable" class="table table-responsive table-striped table-bordered" style="width:100%">

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
        @foreach ($pembeli as $buyer)
        <tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $buyer->nama }}</td>
			<td>{{ $buyer->no_ktp }}</td>
			<td>{{ $buyer->alamat }}</td>
            <td>{{ $buyer->jenis_kelamin }}</td>
			<td>
                @if($buyer->role == 0)
                    <span class="badge badge-danger"> No Role</span>
                @elseif($buyer->role == 2)
                    <span class="badge badge-dark"> Pembeli</span>
                @endif
            </td>
            <td>{{ $buyer->hp }}</td>
            <td>
                <form action="{{ Route('delete.data', $buyer->id) }}" method="POST">
                    @csrf
                    <a class="btn btn-warning btn-sm" href="{{ Route('edit_data', $buyer->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <button type="submit" class="btn btn-danger btn-sm" id="show_confirm" data-konf-delete="{{ $buyer->nama }}"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
		</tr>
        @endforeach
	</tbody>
</table>
</div>
@endsection
