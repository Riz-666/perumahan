<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ccc;
    }

    table tr td {
        padding: 6px;
        font-weight: normal;
        border: 1px solid #ccc;
    }

    table th {
        border: 1px solid #ccc;
    }
</style>
<table>
    <tr>
        <td align="left">
            Perihal : {{ $judul }} <br>
            Tanggal Awal: {{ $tanggalAwal }} s/d Tanggal Akhir: {{ $tanggalAkhir }}
        </td>
    </tr>
</table>
<p></p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No KTP</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Role</th>
            <th>Nomor Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cetak as $row)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $row->nama }} </td>
                <td> {{ $row->email }} </td>
                <td> {{ $row->no_ktp }} </td>
                <td> {{ $row->alamat }} </td>
                <td> {{ $row->jenis_kelamin }} </td>
                <td>
                    @if ($row->role == '1')
                        Admin
                    @elseif($row->role == '2')
                        User
                    @endif
                </td>
                <td> {{ $row->hp }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    window.onload = function() {
        printStruk();
    }

    function printStruk() {
        window.print();
    }
</script>
