<?php

namespace App\Http\Controllers;
use App\Models\Properti;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_rumah)
    {
        $tanggal_sekarang = Carbon::now();
        $rumah = Properti::findOrFail($id_rumah);
        $user = User::get();
        return view('user.pemesanan.form_pesan',[
            'judul' => 'Formulir Pemesanan',
            'rumah' => $rumah,
            'user' => $user,
            'tanggal' => $tanggal_sekarang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'id_user' => 'required|exists:user,id',
        'id_rumah' => 'required|exists:properti,id_rumah',
        'nama' => 'required|string|max:255',
        'hp' => 'required|max:15',
        'tipe_rumah',
        'pembayaran' => 'required|string',
        'harga',
        'jumlah' => 'required',
        'total_pembayaran' => 'required',
        'tanggal_transaksi' => 'required|date',
    ]);


        $transaksi = new Transaksi();
        $transaksi->id_user = $request->id_user;
        $transaksi->id_rumah = $request->id_rumah;
        $transaksi->nama = $request->nama;
        $transaksi->hp = $request->hp;
        $transaksi->tipe_rumah = $request->tipe_rumah;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->status = 'pending';
        $transaksi->harga = $request->harga;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_pembayaran = $request->total_pembayaran;
        $transaksi->tanggal_transaksi = now();

        $transaksi->save($validatedData);

        return redirect()->route('user_Properti',['id_rumah' => $validatedData['id_rumah']])->with('pilih', $transaksi->id);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trx = Transaksi::findOrFail($id);
        $trx->delete();
        return redirect()->route('riwayat.user')->with('success','Riwayat Berhasil Di Hapus');
    }

    public function cetakTransaksi(){

        return view('admin.data_transaksi.formCetak', [
            'judul' => 'Cetak Data Transaksi User'
        ]);
    }
    public function prosesCetakTransaksi(Request $request)
    {
        // Menambahkan aturan validasi
        $request->validate(
            [
                'tanggal_awal' => 'required|date',
                'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal'
            ],
            [
                'tanggal_awal.required' => 'Tanggal Awal harus diisi.',
                'tanggal_akhir.required' => 'Tanggal Akhir harus diisi.',
                'tanggal_akhir.after_or_equal' => 'Tanggal Akhir harus lebih besar atau sama dengan Tanggal Awal.',
            ],
        );
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $query = Transaksi::with('user')
        ->whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])
        ->orderBy('tanggal_transaksi', 'desc');

        $riwayat = $query->get();
        return view('admin.data_transaksi.cetak', [
            'judul' => 'Laporan Akun Pembeli',
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'riwayat' => $riwayat,
        ]);
    }
}
