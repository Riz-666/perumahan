@extends('user.layout.layout')

@section('content')
    <div class="card card-pemesanan container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <form action="{{ Route('proses_pemesanan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="id_rumah" value="{{ $rumah->id_rumah }}">

                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ Auth::user()->nama }}">
                        </div>

                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Telepon</label>
                            <input type="text" id="hp" name="hp" class="form-control" value="{{ Auth::user()->hp }}">
                        </div>

                        <div class="mb-3">
                            <label for="tipe_rumah" class="form-label">Tipe Rumah</label>
                            <input type="text" id="tipe_rumah" name="tipe_rumah" class="form-control" value="{{ $rumah->tipe_rumah }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                            <input type="date" id="tanggal" name="tanggal_transaksi" class="form-control"
                                value="{{ $tanggal->format('Y-m-d') }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="payment_method" class="form-label">Metode Pembayaran</label>
                            <select id="payment_method" name="pembayaran" class="form-control" required>
                                <option value="Cash">Cash</option>
                                <option value="Kredit">Kredit</option>
                                <option value="Kartu Kredit">Kartu Kredit</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" id="harga" name="harga" class="form-control"
                                value="{{ $rumah->harga }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">jumlah</label>
                            <input type="number" id="jumlah" name="jumlah" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="total" class="form-label">Total Pembayaran</label>
                            <input type="number" id="total_pembayaran" name="total_pembayaran" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Pesan Rumah Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-properti">
                    @if ($rumah->foto)
                        <img src="{{ asset('storage/properti-img/' . $rumah->foto) }}" class="foto-preview" width="100%"
                            height="100%">
                        <p></p>
                    @else
                        <img src="{{ asset('storage/properti-img/img-default.jpg') }}" class="foto-preview" width="100%"
                            height="100%">
                    @endif
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const quantityInput = document.getElementById('jumlah');
    const totalAmountInput = document.getElementById('total_pembayaran');
    const pricePerUnit = document.getElementById('harga').value; // Mengonversi ke angka

    quantityInput.addEventListener('input', function() {
        const jumlah = parseInt(quantityInput.value) || 1;
        const total = jumlah * pricePerUnit;
        totalAmountInput.value = total.toFixed(2)
    });
});

    </script>
@endsection
