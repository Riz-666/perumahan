<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $murah = Properti::where('harga','>=',  200000000)
        ->where('harga', '<=', 390000000)
        ->where('status', '=' ,'Tersedia')
        ->orderBy('harga', 'asc')
        ->get();
        $menengah = Properti::where('harga','>=',  390000000)
        ->where('harga', '<=', 590000000)
        ->where('status', '=' ,'Tersedia')
        ->orderBy('harga', 'asc')
        ->get();
        $atas = Properti::where('harga','>=',  590000000)
        ->where('harga', '<=', 1000000000)
        ->where('status', '=' ,'Tersedia')
        ->orderBy('harga', 'asc')
        ->get();
        return view('index',[
            'murah' => $murah,
            'menengah' => $menengah,
            'atas' => $atas
        ]);
    }
    public function properti(){
        $properti = Properti::where('status','Tersedia')
        ->orderBy('luas_bangunan', 'asc')
        ->get();
        return view('properti',compact('properti'));
    }
    public function media(){
        return view('media');
    }
    public function kontak(){
        return view('kontak');
    }
}
