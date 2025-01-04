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
            Tanggal Awal: {{ $riwayat->tanggal_transaksi }}
        </td>
    </tr>
</table>
<p></p>
<table>
    <thead>
        <tr>
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
        </tr>
    </thead>

    <tbody>
        <td>{{ $riwayat->id_user }}</td>
        <td>{{ $riwayat->id_rumah }}</td>
        <td>{{ $riwayat->nama }}</td>
        <td>{{ $riwayat->hp }}</td>
        <td>{{ $riwayat->tipe_rumah }}</td>
        <td>{{ $riwayat->pembayaran }}</td>
        <td>{{ $riwayat->status }}</td>
        <td>{{ $riwayat->harga }}</td>
        <td>{{ $riwayat->jumlah }}</td>
        <td>{{ $riwayat->total_pembayaran }}</td>
        <td>{{ $riwayat->tanggal_transaksi }}</td>
        </tr>
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
