<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
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
                return redirect()->route('admin.dashboard')->with('status', Auth::user()->nama);
            }elseif (Auth::user()->role == 2) {
                return redirect()->route('user.dashboard');
            }
        }else{
            return redirect()->route('index.login')->withErrors('Data Yang Dimasukan Tidak Sesuai')->withInput();
        }
}
public function register(){
    return view('register');
}
public function authRegister(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
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
            return redirect()->route('admin.dashboard')->with('status', Auth::user()->nama);
        }elseif (Auth::user()->role == 2) {
            return redirect()->route('user.dashboard');
        }
    }else{
        return redirect()->route('index.login')->withErrors('Data Yang Dimasukan Tidak Sesuai')->withInput();
    }
}
    public function logout(){
        Auth::logout();
        return redirect()->route('index.login');
    }
    public function daftar(){
        return view('daftar');
    }
}
