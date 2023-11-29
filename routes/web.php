<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/barang', function () {
    return view('admin.barang');
})->name('admin.barang');

Route::get('/admin/barangtambah', function () {
    return view('admin.tambahbarang');
})->name('admin.tambahbarang');

Route::get('/admin/barangedit', function () {
    return view('admin.editbarang');
})->name('admin.editbarang');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/barangtambah', function () {
        return view('tambahbarang');
    })->name('tambahbarang');
    
    Route::get('/barangedit', function () {
        return view('editbarang');
    })->name('editbarang');
});
