<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
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
    return view('welcome');
});

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
    Route::get('/view', [BarangController::class, 'index'])->name('barang.view');
    Route::get('/add', [BarangController::class, 'create'])->name('barang.add');
    Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/delete/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');