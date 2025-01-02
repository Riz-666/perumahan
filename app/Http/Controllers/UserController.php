<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Properti;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('user.index',[
            'rumah' => $rumah,

        ]);
    }
    public function properti(){
        $properti = Properti::where('status','Tersedia')
        ->orderBy('luas_bangunan', 'asc')
        ->get();
        return view('user.properti',compact('properti'));
    }
    public function media(){
        $media = Media::where('id_foto', '>=',1)->get();
        return view('user.media',[
            'media' => $media
        ]);
    }
    public function kontak(){
        return view('user.kontak');
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
}
