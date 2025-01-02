<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Properti;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $rumah = Properti::where('id_rumah', '>=', 1)
        ->where('status', '=' ,'Tersedia')
        ->orderBy('harga', 'asc')
        ->get();
        return view('index',[
            'rumah' => $rumah,
        ]);
    }
    public function properti(){
        $properti = Properti::where('status','Tersedia')
        ->orderBy('luas_bangunan', 'asc')
        ->get();
        return view('properti',compact('properti'));
    }
    public function media(){
        $media = Media::where('id_foto', '>=',1)->get();
        return view('media',[
            'media' => $media
        ]);
    }
    public function kontak(){
        return view('kontak');
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
            ->where('status','Tersedia');
        }

        if ($harga_min) {
            $query->where('harga', '>=', $harga_min)
            ->where('status','Tersedia');
        }

        if ($harga_max) {
            $query->where('harga', '<=', $harga_max)
            ->where('status','Tersedia');
        }

        if ($cari) {
            $query->where('keterangan', 'like', '%' . $keterangan . '%')
            ->where('status','Tersedia');
        }

        $rumah = $query->get();

        return view('cari_properti', compact('rumah'));
    }
}
