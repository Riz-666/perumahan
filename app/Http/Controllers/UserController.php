<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Properti;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumah = Properti::where('id_rumah', '>=', 1)
        ->where('status', '=' ,'Tersedia')
        ->orderBy('harga', 'asc')
        ->get();
        return view('user.pembeli_index',[
            'rumah' => $rumah,

        ]);
    }
    public function properti(){
        $properti = Properti::where('status','Tersedia')
        ->orderBy('luas_bangunan', 'asc')
        ->get();
        return view('user.pembeli_properti',compact('properti'));
    }
    public function media(){
        $media = Media::where('id_foto', '>=',1)->get();
        return view('user.pembeli_media',[
            'media' => $media
        ]);
    }
    public function kontak(){
        return view('user.pembeli_kontak');
    }
    public function riwayat(){
        $trx = Transaksi::where('id_user', Auth::user()->id)
        ->orderBy('tanggal_transaksi','desc')
        ->get();
        return view('user.riwayat_transaksi',[
            'judul' => 'Riwayat Pemesanan',
            'trx' => $trx
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
        //
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
        //
    }
    public function search(Request $request){
        $request->validate([
            'tipe_rumah',
            'harga_min',
            'harga_max',
            'keterangan'
        ]);
        $tipe_rumah = $request->input('tipe_rumah');
        $harga_min = $request->input('harga_min');
        $harga_max = $request->input('harga_max');
        $cari = $request->input('keterangan');

        $query = Properti::query();

        if ($tipe_rumah) {
            $query->where('tipe_rumah', $tipe_rumah)
            ->where('status','Tersedia')
            ->orderBy('harga', 'asc');
        }

        if ($harga_min) {
            $query->where('harga', '>=', $harga_min)
            ->where('status','Tersedia')
            ->orderBy('harga', 'asc');
        }

        if ($harga_max) {
            $query->where('harga', '<=', $harga_max)
            ->where('status','Tersedia')
            ->orderBy('harga', 'asc');
        }

        if ($cari) {
            $query->where('keterangan_rumah', 'like', '%' . $cari . '%')
            ->where('status','Tersedia')
            ->orderBy('harga', 'asc');
        }

        $rumah = $query->get();

        return view('user.pembeli_cari_properti', compact('rumah'));
    }
    public function cetakRiwayat($id){

        $riwayat = Transaksi::findOrFail($id);
        return view('user.pemesanan.pembeli_cetak', [
            'judul' => 'Formulir Pemesanan',
            'riwayat' => $riwayat
        ]);
    }
}
