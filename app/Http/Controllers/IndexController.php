<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    }
    public function properti(){
        return view('properti');
    }
    public function media(){
        return view('media');
    }
    public function kontak(){
        return view('kontak');
    }
}
