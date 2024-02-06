<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\JensamController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\LoginWargaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SampahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

// // login warga
// Route::get('/login/warga', [LoginWargaController::class, 'warga']);
// Route::post('/login/warga', [LoginWargaController::class, 'wargapost'])->name('warga');

// admin
// Route::get('/login',[LoginController::class, 'index']);
// Route::post('/login',[LoginController::class,'login'])->name('login');

// Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'dashboard']);
    //warga
    // Route::get('/dashboard/warga', [WargaController::class, 'index'])->name('admin.warga');
    Route::post('/warga', [AdminController::class, 'halamandepan'])->name('warga');

    // Warga CRUD
    Route::resource('/dashboard/warga', WargaController::class);

    //kader
    Route::resource('/dashboard/kader', KaderController::class);
    
    //pembelian
    Route::resource('/dashboard/pembelian', PembelianController::class);
    //penjualan
    Route::resource('/dashboard/penjualan', PenjualanController::class);

    //tabungan
    Route::resource('/dashboard/tabungan', TabunganController::class);

    //jenis_sampah
    Route::resource('/dashboard/jenis_sampah', JensamController::class);

     //sampah
     Route::resource('/dashboard/sampah', SampahController::class);

// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
