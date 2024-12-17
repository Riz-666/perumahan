<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek(){
        if(auth()->user()->role === 1){
            return redirect('/admin/dashboard');
        }else{
            return redirect('/user/dashboard');
        }
    }
}
