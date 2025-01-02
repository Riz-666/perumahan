<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi'
        ]);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($logininfo)){
            if(Auth::user()->role == 1){
                return redirect()->route('admin_dashboard')->with('status', Auth::user()->nama);
            }elseif (Auth::user()->role == 2) {
                return redirect()->route('user_Dashboard')->with('status', Auth::user()->nama);
            }
        }else{
            return redirect()->route('index.login')->withErrors('Data Yang Dimasukan Tidak Sesuai')->withInput();
        }
}
public function register(){
    return view('daftar',[
        'judul' => 'Daftar'
    ]);
}
public function authRegister(Request $request){
    $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255|email|unique:user',
            'no_ktp' => 'required|max:20',
            'jenis_kelamin' => 'required',
            'hp' => 'required|max:13',
            'role' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:4',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|file|max:2048',
    ],$message = [
        'email.required' => 'Email Wajib Di Isi',
        'password.required' => 'Password Wajib Di Isi'
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
        'alamat' => $request->alamat,
        'password' => Hash::make($request->password),
        'foto' => $fileName,
        'role' => $request->role
    ]);

    return redirect()->route('index.login')->with('status','Akun Berhasil Di Buat');

}
    public function logout(){
        Auth::logout();
        return redirect()->route('index.login');
    }
}
