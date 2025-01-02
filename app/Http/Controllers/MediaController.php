<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::orderBy('created_at', 'desc')->get();
        return view('admin.media.media',[
            'judul' => 'Kelola Media',
            'media' => $media
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media.tambah',[
            'judul' => 'Tambah Ke Gallery',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'keterangan_foto' => 'required|max:255',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
        ],$messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 2048 KB.',
        ]);


        $filePath = public_path('/storage/media-img');
        // $user = Media::create([
        //     'title' => $request->title,
        //     'keterangan_foto' => $request->keterangan_foto,
        //     'foto' => $fileName,
        // ]);
        $media = new Media();
        $media->title = $request->title;

        $data = $request->input('keterangan_foto');
        $data1 = preg_replace('/<\/?(p|u|em|strong)[^>]*>/', '', $data);
        $media->keterangan_foto = $data1;

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = time() . $request->file('foto')->getClientOriginalName();

            $file->move($filePath,$fileName);
            $media->foto = $fileName;
        }

        $media->save($validatedData, $messages);
        return redirect()->route('index.media')->with('success','Data Berhasil di tambahkan');
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
        $media = Media::findOrFail($id);
        if ($media->foto) {
            $oldImagePath = public_path('storage/media-img/') . $media->foto;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $media->delete();
        return redirect()->route('index.media')->with('success');
    }
}
