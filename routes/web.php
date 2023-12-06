<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
Route::get('user/barang', [BarangController::class,'userIndex'])->name('user.barang');
Route::get('/detailbarang/{id}', [BarangController::class,'userShow'])->name('user.detailbarang');


Route::group(['prefix' => 'admin', 'middleware' => [
    'role:admin',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang.view');
    Route::get('/barang_add', [BarangController::class, 'create'])->name('barang.add');
    Route::post('/barang_store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang_edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/barang_update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/delete/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
    
    Route::get('/peminjam',[AdminController::class,'index'])->name('admin.peminjam');
    Route::get('/cekpembayaran/{id}',[AdminController::class,'showPembayaran'])->name('admin.cekpembayaran');
    Route::get('/pengembalian/{id}',[AdminController::class,'showPengembalian'])->name('admin.pengembalian');
    Route::post('/konfirmasipembayaran/{id}',[AdminController::class,'konfirmasiPembayaran'])->name('admin.konfirmasipembayaran');
    Route::post('/konfirmasipengembalian/{id}',[AdminController::class,'konfirmasiPengembalian'])->name('admin.konfirmasipengembalian');
    Route::delete('/deletepeminjam/{id}',[AdminController::class,'destroy'])->name('admin.deletepeminjam');
    Route::get('/riwayatpeminjaman', [AdminController::class,'viewUser'])->name('admin.riwayatpeminjaman');
});

Route::group(['prefix' => 'user', 'middleware' => [
    'role:user',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
   
    Route::get('/barangformSewa/{id}', [UserController::class,'show'])->name('user.formSewa');
    Route::get('/transaksi', [TransaksiController::class,'index'])->name('user.transaksi');
    Route::post('/sewaStore', [UserController::class,'storeSewa'])->name('user.storeSewa');
    Route::post('/transaksiStore', [TransaksiController::class,'storeTransaksi'])->name('user.storeTransaksi');
    Route::get('/transaksipembayaran/{id}',[TransaksiController::class, 'showPembayaran'])->name('user.pembayaran');
    Route::delete('deletetransaksi/{id}',[TransaksiController::class, 'destroy'])->name('user.delettransaksi');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
