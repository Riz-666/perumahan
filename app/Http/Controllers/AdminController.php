<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard', [
            'user' => 'user',
            'judul' => 'Admin Dashboard',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin_show()
    {
        $admin = User::where('role','1')->orderBy('updated_at','desc')->get();
        return view('admin.user.admin',compact('admin'),[
            'judul' => 'Kelola Data Admin'
        ]);
    }
    public function pembeli_show()
    {
        $pembeli = User::where('role','2')->orderBy('updated_at','desc')->get();
        return view('admin.user.pembeli',compact('pembeli'),[
            'judul' => 'Kelola Data Pembeli'
        ]);
    }
    public function create()
    {
        return view('admin.user.tambah',[
            'judul' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255|email|unique:user',
            'no_ktp' => 'required|max:20',
            'jenis_kelamin' => 'required',
            'role' => 'required',
            'alamat' => 'required',
            'hp' => 'required|max:13',
            'password' => 'required|min:4',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
        ],$messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 2048 KB.',
        ]);

        $filePath = public_path('/storage/user-img');
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = time() . $request->file('foto')->getClientOriginalName();
            $file->move($filePath,$fileName);
        }
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_ktp' => $request->no_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hp' => $request->hp,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'foto' => $fileName,
            'role' => $request->role,
        ]);


        if ($request->role == 1) {
            return redirect()->route('admin.data')->with('success','Data Berhasil di tambahkan');
        }else{
            return redirect()->route('pembeli.data')->with('success','Data Berhasil di tambahkan');
        }


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
        $user = User::findOrFail($id);
        return view('admin.user.edit',[
            'judul' => 'Edit Data',
            'edit' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $rules = [
            'nama' => 'required|max:255',
            'no_ktp' => 'required|max:20',
            'jenis_kelamin' => 'required',
            'role' => 'required',
            'hp' => 'required|max:13',
            'password' => 'required|min:4',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
        ];
        $messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 2048 KB.',
        ];
        if ($request->email != $user->email) {
            $rules['email'] = 'required|max:255|email|unique:user';
        }
        $validatedData = $request->validate($rules, $messages);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->no_ktp = $request->no_ktp;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->role = $request->role;
        $user->hp = $request->hp;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if($request->hasFile('foto')){
            $dir = public_path('storage/user-img/');
            $file = $request->file('foto');
            $filename = time() . $file->getClientOriginalName();
            $file->move($dir,$filename);
            if(!is_null($user->foto)){
                $oldImagePath = public_path('storage/user-img/'.$user->foto);
                if(file_exists($oldImagePath)){
                    unlink($oldImagePath);
                }
            }
            $user->foto = $filename;

        }
            $result = $user->save($validatedData);
            if ($request->role == 1) {
                return redirect()->route('admin.data')->with('success','Data Berhasil di Ubah');
            }else{
                return redirect()->route('pembeli.data')->with('success','Data Berhasil di Ubah');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user->foto) {
            $oldImagePath = public_path('storage/user-img/') . $user->foto;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        if ($user->delete('role' == 1)) {
            return redirect()->route('admin.data')->with('success');
        }elseif ($user->delete('role' == 2)) {
            return redirect()->route('pembeli.data')->with('success');
        }
    }


    public function cetak(){
        return view('admin.user.formData',[
            'judul' => 'Cetak Data Pembeli'
        ]);
    }

    public function cetakAkun(Request $request)
    {
        // Menambahkan aturan validasi
        $request->validate(
            [
                'tanggal_awal' => 'required|date',
                'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
                'role' => 'required'
            ],
            [
                'tanggal_awal.required' => 'Tanggal Awal harus diisi.',
                'tanggal_akhir.required' => 'Tanggal Akhir harus diisi.',
                'tanggal_akhir.after_or_equal' => 'Tanggal Akhir harus lebih besar atau sama dengan Tanggal Awal.',
            ],
        );
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $role = $request->input('role');
        $query = User::where('role', $role)
        ->whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])
        ->orderBy('id', 'desc');
        $user = $query->get();
        return view('admin.user.cetak', [
            'judul' => 'Laporan Akun Pembeli',
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'cetak' => $user,
        ]);
    }
}
