<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\EvaluasiController;

// use Illuminate\Support\Facades\Auth;
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


    Route::get('/',[HomeController::class,'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/mahasiswa',[MhsController::class,'index'])->name('mahasiswa')->middleware('auth');
    Route::get('/mahasiswa/create',[MhsController::class,'create'])->name('create')->middleware('auth'); 
    Route::get('/mahasiswa/data/tahun',[MhsController::class,'filterdata'])->name('filterdata')->middleware('auth'); 
    Route::post('/store',[MhsController::class,'store'])->name('store')->middleware('auth'); 
    Route::get('/mahasiswa/keyword',[MhsController::class,'search'])->name('search')->middleware('auth'); 
    Route::get('/mahasiswa/edit/{id}',[MhsController::class,'edit'])->name('edit')->middleware('auth'); 
    Route::put('/mahasiswa/update/{id}',[MhsController::class,'update'])->name('update')->middleware('auth'); 
    Route::get('/destroy/{id}',[MhsController::class,'destroy'])->name('destroy')->middleware('auth'); 
    Route::get('/mahasiswa/filter',[MhsController::class,'filter'])->name('filter')->middleware('auth'); 
    Route::get('/evaluasi',[EvaluasiController::class,'indexeval'])->name('indexeval')->middleware('auth');
    Route::post('/evaluasi',[EvaluasiController::class,'storeeval'])->name('storeeval')->middleware('auth'); 
    Route::post('/konfirmasi/{id}',[EvaluasiController::class, 'konfirmasi'])->name('konfirmasi')->middleware('auth');
    Route::get('/hasil',[HasilController::class, 'indexhasil'])->name('indexhasil')->middleware('auth');
    Route::get('/hasil/keyword',[EvaluasiController::class,'searchhasil'])->name('searchhasil')->middleware('auth'); 
    Route::get('mahasiswa/downloaddata',[MhsController::class,'downloaddata'])->name('downloaddata')->middleware('auth'); 
    Route::post('/mahasiswa/importdata',[MhsController::class,'importdata'])->name('importdata')->middleware('auth'); 
    Route::get('/mahasiswa/impor',[MhsController::class,'impor'])->name('impor')->middleware('auth'); 
    Route::get('/hasil/cetak-pdf/',[MhsController::class,'cetak'])->name('cetak')->middleware('auth'); 
    Route::get('/Masuk',[AuthController::class,'index'])->name('login');
    Route::get('/Daftar',[AuthController::class,'daftar'])->name('daftar');
    Route::post('/Daftar/daftarproses',[AuthController::class,'daftarproses'])->name('daftarproses');
    Route::post('/loginproses',[AuthController::class,'loginproses'])->name('loginproses');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/kelolaUser',[AuthController::class,'kelola'])->name('kelolaUser')->middleware('Admins');
    Route::get('/kelolaUser/editUser/{id}',[AuthController::class,'editUser'])->name('editUser')->middleware('Admins');
    Route::put('/kelolaUser/updateUser/{id}',[AuthController::class,'updateUser'])->name('updateUser')->middleware('Admins');
    Route::get('/kelolaUser/hapusData/{id}',[AuthController::class,'hapusdata'])->name('hapusdata')->middleware('Admins');
    Route::get('/unduh-template-excel', function () {
        $file = public_path('templates\Template.xlsx'); 
        $headers = ['Content-Type: application\xlsx'];
    
        return response()->download($file, 'Template.xlsx', $headers);
        
    }) ->middleware('Admins');
