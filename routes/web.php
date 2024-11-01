<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BarangController
};

Route::get('/', [BarangController::class, 'index'])->name('home');
Route::resource('barang', BarangController::class);

