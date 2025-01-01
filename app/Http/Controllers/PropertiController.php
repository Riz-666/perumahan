<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properti = Properti::orderBy('updated_at','desc')->get();
        return view('admin.properti.properti',[
            'judul' => 'Kelola Properti',
            'properti' => $properti,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitas = Fasilitas::get();
        return view('admin.properti.tambah',[
            'judul' => 'Tambah Properti',
            'fasilitas' => $fasilitas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_rumah' => 'required|max:10',
            'tipe_rumah' => 'required|max:50',
            'luas_bangunan' => 'required|max:10',
            'luas_tanah' => 'required|max:10',
            'harga' => 'required',
            'fasilitas' => 'required',
            'fasilitas.*' => 'string',
            'status' => 'required',
            'keterangan_rumah' => 'required|max:255',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
        ],$messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 2048 KB.',
        ]);

        $filePath = public_path('/storage/properti-img');

        $properti = new properti();
        $properti->nomor_rumah = $request->nomor_rumah;
        $properti->tipe_rumah = $request->tipe_rumah;
        $properti->luas_bangunan = $request->luas_bangunan;
        $properti->luas_tanah = $request->luas_tanah;
        $properti->harga = $request->harga;

        $input = $request->all();
        $fasilitas = $input['fasilitas'];
        $properti->fasilitas = implode(' | ',$fasilitas );
        
        $data = $request->input('keterangan_rumah');
        $data1 = preg_replace('/<\/?(p|u|em|strong)[^>]*>/', '', $data);
        $properti->keterangan_rumah = $data1;

        $properti->status = $request->status;
        $properti->keterangan_rumah = $request->keterangan_rumah;

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = time() . $request->file('foto')->getClientOriginalName();

            $file->move($filePath,$fileName);
            $properti->foto = $fileName;
        }
        $properti->save();
        return redirect()->route('properti_data')->with('success','Data Berhasil di tambahkan');

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
        $fasilitas = Fasilitas::get();
        $properti = Properti::findOrFail($id);
        return view('admin.properti.edit',[
            'judul' => 'Edit Properti',
            'fasilitas' => $fasilitas,
            'properti' => $properti
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_rumah)
    {
        $properti = Properti::findOrFail($id_rumah);
        $rules = [
            'nomor_rumah' => 'required|max:10',
            'tipe_rumah' => 'required|max:50',
            'luas_bangunan' => 'required|max:10',
            'luas_tanah' => 'required|max:10',
            'harga' => 'required',
            'fasilitas' => 'required',
            'fasilitas.*' => 'string',
            'status' => 'required',
            'keterangan_rumah' => 'required|max:255',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
        ];
        $messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 2048 KB.',
        ];

        $validatedData = $request->validate($rules, $messages);

        $properti->nomor_rumah = $request->nomor_rumah;
        $properti->tipe_rumah = $request->tipe_rumah;
        $properti->luas_bangunan = $request->luas_bangunan;
        $properti->luas_tanah = $request->luas_tanah;
        $properti->harga = $request->harga;
        $input = $request->all();
        $fasilitas = $input['fasilitas'];
        $properti->fasilitas = implode(' | ',$fasilitas );
        $properti->status = $request->status;

        $data = $request->input('keterangan_rumah');
        $data1 = preg_replace('/<\/?(p|u|em|strong)[^>]*>/', '', $data);
        $properti->keterangan_rumah = $data1;

        if($request->hasFile('foto')){
            $dir = public_path('storage/properti-img/');
            $file = $request->file('foto');
            $filename = time() . $file->getClientOriginalName();
            $file->move($dir,$filename);
            if(!is_null($properti->foto)){
                $oldImagePath = public_path('storage/properti-img/'.$properti->foto);
                if(file_exists($oldImagePath)){
                    unlink($oldImagePath);
                }
            }
            $properti->foto = $filename;

        }
            $result = $properti->save($validatedData,$messages);
            return redirect()->route('properti_data')->with('success','Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $properti = Properti::findOrFail($id);
        if ($properti->foto) {
            $oldImagePath = public_path('storage/properti-img/') . $properti->foto;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $properti->delete();
        return redirect()->route('properti_data')->with('success');
    }

    public function cetak(){
        return view('admin.properti.formData',[
            'judul' => 'Cetak Data Properti'
        ]);
    }
    public function cetakProperti(Request $request)
    {
        // Menambahkan aturan validasi
        $request->validate(
            [
                'tanggal_awal' => 'required|date',
                'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            ],
            [
                'tanggal_awal.required' => 'Tanggal Awal harus diisi.',
                'tanggal_akhir.required' => 'Tanggal Akhir harus diisi.',
                'tanggal_akhir.after_or_equal' => 'Tanggal Akhir harus lebih besar atau sama dengan Tanggal Awal.',
            ],
        );
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $query = Properti::whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])
        ->orderBy('id_rumah', 'desc');
        $properti = $query->get();
        return view('admin.properti.cetak', [
            'judul' => 'Laporan Properti',
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'cetak' => $properti,
        ]);
    }
}
