<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});
 Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
   

    Route::get('/barang',[BarangController::class,'index']);
    Route::get('/barang/tambah',[BarangController::class,'create']);
    Route::post('/barang/simpan',[BarangController::class,'store']);
    Route::get('/barang/{id}/edit',[BarangController::class,'show']);
    Route::get('/barang/{id}/hapus',[BarangController::class,'destroy']);
    Route::post('/barang/{id}/update',[BarangController::class,'update']);

    Route::get('/user',[UserController::class,'index']);
    Route::get('/user/tambah',[UserController::class,'create']);
    Route::post('/user/simpan',[UserController::class,'store']);
    Route::get('/user/{id}/edit',[UserController::class,'show']);
    Route::get('/user/{id}/hapus',[UserController::class,'destroy']);
    Route::post('/user/{id}/update',[UserController::class,'update']);
    
});



Auth::routes();


