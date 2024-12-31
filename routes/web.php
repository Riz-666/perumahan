<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertiController;
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

//KELOLA AKUN
    //Kelola Data admin
    Route::get('admin/kelola/admin', [AdminController::class, 'admin_show'])->name('admin.data')->middleware('userAkses:1');
    //kelola data pembeli
    Route::get('admin/kelola/pembeli', [AdminController::class, 'pembeli_show'])->name('pembeli.data')->middleware('userAkses:1');
    //tambah data User/admin
    Route::get('admin/kelola/tambah_user', [AdminController::class, 'create'])->name('tambah_data')->middleware('userAkses:1');
    Route::post('admin/kelola/tambah_data/proses', [AdminController::class, 'store'])->name('add.user')->middleware('userAkses:1');
    //edit data
    Route::get('admin/kelola/edit_user{id}', [AdminController::class, 'edit'])->name('edit_data')->middleware('userAkses:1');
    Route::post('admin/kelola/edit/proses{id}', [AdminController::class, 'update'])->name('update_proses')->middleware('userAkses:1');
    //Delete data
    Route::post('admin/kelola/delete{id}', [AdminController::class, 'destroy'])->name('delete.data')->middleware('userAkses:1');

//KELOLA PROPERTI
    //properti view
    Route::get('admin/kelola/properti', [PropertiController::class, 'index'])->name('properti_data')->middleware('userAkses:1');
    //Delete data
    Route::post('admin/kelola/delete/properti{id}', [PropertiController::class, 'destroy'])->name('delete_data_properti')->middleware('userAkses:1');
    //tambah data Properti
    Route::get('admin/kelola/tambah_rumah', [PropertiController::class, 'create'])->name('tambah_rumah')->middleware('userAkses:1');
    Route::post('admin/kelola/proses_tambah_properti', [PropertiController::class, 'store'])->name('add.properti')->middleware('userAkses:1');
    //Edit data properti
    Route::get('admin/kelola/edit_rumah{id}', [PropertiController::class, 'edit'])->name('edit.properti')->middleware('userAkses:1');
    Route::post('admin/kelola/edit_rumah/proses{id}', [PropertiController::class, 'update'])->name('prosesEdit.properti')->middleware('userAkses:1');

//KELOLA FASILITAS
    Route::get('admin/kelola/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas_data')->middleware('userAkses:1');
    //Tambah Fasilitas
    Route::get('admin/kelola/tambah_fasilitas', [FasilitasController::class, 'create'])->name('tambah_fasilitas')->middleware('userAkses:1');
    Route::post('admin/kelola/proses_tambah_fasilitas', [FasilitasController::class, 'store'])->name('add.fasilitas')->middleware('userAkses:1');
    //Delete Data Fasilitas
    Route::post('admin/kelola/delete/fasilitas{id}', [FasilitasController::class, 'destroy'])->name('delete_data_fasilitas')->middleware('userAkses:1');

//PAGE USER
    //user
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('userAkses:2');
    Route::get('user/properti', [UserController::class, 'properti'])->name('user.index.properti')->middleware('userAkses:2');
    Route::get('user/media', [UserController::class, 'media'])->name('user.index.media')->middleware('userAkses:2');
    Route::get('user/kontak', [UserController::class, 'kontak'])->name('user.index.kontak')->middleware('userAkses:2');
    //logout
    Route::get('page/logout', [LoginController::class, 'logout'])->name('page.logout');

});
