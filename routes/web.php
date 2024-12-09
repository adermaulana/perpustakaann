<?php

//Models
use App\Models\Warga;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminRTController;
use App\Http\Controllers\RTWargaController;
use App\Http\Controllers\RTMutasiController;
use App\Http\Controllers\AdminWargaController;
use App\Http\Controllers\RTKeluargaController;
use App\Http\Controllers\AdminMutasiController;
use App\Http\Controllers\AdminKeluargaController;

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
    return redirect('/login');
})->middleware('guest');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/admin',function(){
    return view('admin.index');
});

Route::get('/rt',function(){

    $warga_laki = Warga::where('jk_warga','Laki-laki')->count();
    $warga_perempuan = Warga::where('jk_warga','Perempuan')->count();
    $warga_seventeen = Warga::whereRaw('TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) >= 17')
    ->where('tanggal_lahir_warga', '!=', '0000-00-00')
    ->count();
    $warga_under_seventeen = Warga::whereRaw('TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17')
    ->where('tanggal_lahir_warga', '!=', '0000-00-00')
    ->count();

    return view('rt.index',[
        'warga_laki' => $warga_laki,
        'warga_perempuan' => $warga_perempuan,
        'warga_seventeen' => $warga_seventeen,
        'warga_under_seventeen' => $warga_under_seventeen
    ]);
});

//Login
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/keluar',[LoginController::class,'keluar']);

//adminRT
Route::resource('/admin/rt',AdminRTController::class);

//adminWarga
Route::resource('/admin/warga',AdminWargaController::class);

//adminKeluarga
Route::resource('/admin/keluarga',AdminKeluargaController::class);

//adminMutasi
Route::resource('/admin/mutasi',AdminMutasiController::class);

//rtWarga
Route::resource('/rt/warga',RTWargaController::class)->middleware('auth:rt');
Route::get('/rt/warga/{id}/mutasi',[RTWargaController::class,'mutasi'])->middleware('auth:rt');
Route::post('/rt/warga/mutasi',[RTWargaController::class,'store_mutasi'])->middleware('auth:rt');

//rtKeluarga
Route::resource('/rt/keluarga',RTKeluargaController::class)->middleware('auth:rt');

//rtMutasi
Route::resource('/rt/mutasi',RTMutasiController::class)->middleware('auth:rt');

