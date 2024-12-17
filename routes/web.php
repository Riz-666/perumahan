<?php

use App\Http\Controllers\AdminController;
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



Route::middleware(['guest'])->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('login');
    Route::get('index/login', [LoginController::class, 'login'])->name('index.login');
    Route::get('index/daftar', [LoginController::class, 'daftar'])->name('index.daftar');

});
Route::get('/home', function(){
    return redirect('admin/dashboard');
});

Route::get('index/properti', [IndexController::class, 'properti'])->name('index.properti');

Route::get('index/media', [IndexController::class, 'media'])->name('index.media');

Route::get('index/kontak', [IndexController::class, 'kontak'])->name('index.kontak');


// Login Aksi
Route::post('index/login/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::middleware(['auth'])->group(function(){
    //admin
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('userAkses:1');
    //user
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('userAkses:2');
    //logout
    Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

});
