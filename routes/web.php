<?php

use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi.index');
