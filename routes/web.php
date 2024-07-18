<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\pegawai;
use App\Http\Controllers\departemen;

Route::get('/', [Home::class, 'index']);
Route::get('/pegawai', [pegawai::class, 'index']);
Route::post('/simpanData', [pegawai::class, 'simpanData']);
Route::get('/lihatData', [pegawai::class,'lihatData']);
Route::get('/editData/{ID}', [pegawai::class,'editData']);
Route::post('/pegawai/update/{ID}', [pegawai::class,'updateData'])->name('pegawai.update');
Route::get('/hapusData/{ID}', [pegawai::class, 'hapusData']);

Route::get('/departemenForm', [departemen::class, 'index']);
Route::get('/viewDepartment', [departemen::class, 'view']);
Route::post('/add', [departemen::class,'add']);
Route::get('/edit/{id}', [departemen::class, 'edit']);
Route::post('/departemen/update/{id}', [departemen::class, 'update'])->name('departemen.update');
Route::get('/delete/{id}', [departemen::class, 'delete']);