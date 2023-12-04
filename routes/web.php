<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
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
    return view('user.index');
})->name('user.index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('user/home', function () {
        return view('dashboard');
    })->name('user.dashboard');
});

Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/barangtambah', function () {
        return view('admin.tambahbarang');
    })->name('admin.tambahbarang');
    Route::get('/barangedit', function () {
        return view('admin.editbarang');
    })->name('admin.editbarang');
    Route::get('/barang', function () {
        return view('admin.barang');
    })->name('admin.barang');
    Route::get('/peminjam', function () {
        return view('admin.peminjam');
    })->name('admin.peminjam');
    Route::get('/riwayatpeminjaman', function () {
        return view('admin.riwayatpeminjaman');
    })->name('admin.riwayatpeminjaman');
});

Route::group(['prefix' => 'user', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/barang', function () {
        return view('user.barang');
    })->name('user.barang');
    Route::get('/detailbarang', function () {
        return view('user.detailbarang');
    })->name('user.detailbarang');

    Route::get('/peminjaman', function () {
        return view('user.peminjaman');
    })->name('user.peminjaman');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
