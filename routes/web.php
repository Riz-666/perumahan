<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index/login', [LoginController::class, 'login'])->name('index.login');
Route::get('index/daftar', [LoginController::class, 'daftar'])->name('index.daftar');

Route::get('index/properti', [IndexController::class, 'properti'])->name('index.properti');

Route::get('index/media', [IndexController::class, 'media'])->name('index.media');

Route::get('index/kontak', [IndexController::class, 'kontak'])->name('index.kontak');
