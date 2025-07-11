<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 1.6;
    }

    .struk-container {
        width: 100%;
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #333;
    }

    .judul {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .info {
        margin-bottom: 15px;
    }

    .info p {
        margin: 4px 0;
    }

    .detail-item {
        margin-bottom: 10px;
    }

    .label {
        display: inline-block;
        width: 160px;
        font-weight: bold;
    }

    .footer {
        margin-top: 20px;
        text-align: right;
        font-size: 13px;
    }

    @media print {
        .no-print {
            display: none;
        }

        body {
            margin: 0;
        }
    }
</style>

<div class="struk-container">
    <div class="judul">Struk Pembelian</div>

    <div class="info">
        <p><strong>Perihal:</strong> {{ $judul }}</p>
        <p><strong>Tanggal Transaksi:</strong> {{ date('d-m-Y', strtotime($riwayat->tanggal_transaksi)) }}</p>
    </div>

    <div class="detail-item"><span class="label">ID User :</span> {{ $riwayat->user->nama }}</div>
    <div class="detail-item"><span class="label">Nomor Rumah :</span> {{ $riwayat->properti->nomor_rumah }}</div>
    <div class="detail-item"><span class="label">Nama Pemesan :</span> {{ $riwayat->nama }}</div>
    <div class="detail-item"><span class="label">No. Telepon :</span> {{ $riwayat->hp }}</div>
    <div class="detail-item"><span class="label">Tipe Rumah :</span> {{ $riwayat->tipe_rumah }}</div>
    <div class="detail-item"><span class="label">Metode Pembayaran :</span> {{ ucfirst($riwayat->pembayaran) }}</div>
    <div class="detail-item"><span class="label">Status:</span> {{ ucfirst($riwayat->status) }}</div>
    <div class="detail-item"><span class="label">Harga per Unit :</span> Rp {{ number_format($riwayat->harga, 0, ',', '.') }}</div>
    <div class="detail-item"><span class="label">Jumlah Pesan :</span> {{ $riwayat->jumlah }}</div>
    <div class="detail-item"><span class="label">Total Pembayaran :</span> Rp {{ number_format($riwayat->total_pembayaran, 0, ',', '.') }}</div>

    <div class="footer">
        Dicetak pada: {{ date('d-m-Y H:i') }}
    </div>
</div>

<script>
    window.onload = function () {
        window.print();
    };
</script>
