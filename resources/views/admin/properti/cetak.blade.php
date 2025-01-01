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
            <th>No. Rumah</th>
            <th>Tipe Rumah</th>
            <th>Luas Bangunan</th>
            <th>Luas Tanah</th>
            <th>Harga</th>
            <th>Fasilitas</th>
            <th>Keterangan</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($cetak as $rumah)
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
                <td>{{ $rumah->harga }}</td>
                @if (!empty($rumah->fasilitas))
                    <td>{{ $rumah->fasilitas }}</td>
                @else
                    <td>Fasilitas Belum Di Tambahkan</td>
                @endif
                <td>{{ $rumah->keterangan_rumah }}</td>
                <td>{{ $rumah->status }}</td>
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
