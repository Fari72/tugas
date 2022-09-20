<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    GuruController,
    KelasController,
    MapelController,
    SiswaController
};

Route::get('/', function () {
    return view('D');
});

// Route Siswa
Route::resource('/siswa', SiswaController::class);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'destroy']);

// Route Siswa
Route::resource('/kelas', KelasController::class);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'destroy']);

// Route Siswa
Route::resource('/guru', GuruController::class);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);

// Route Siswa
Route::resource('/mapel', MapelController::class);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::get('/mapel/hapus/{id}', [MapelController::class, 'destroy']);