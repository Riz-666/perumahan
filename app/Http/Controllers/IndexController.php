<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $properti = Properti::get()->all();
        return view('index',compact('properti'));
    }
    public function properti(){
        $properti = Properti::where('status','Tersedia')->get();
        return view('properti',compact('properti'));
    }
    public function media(){
        return view('media');
    }
    public function kontak(){
        return view('kontak');
    }
}
