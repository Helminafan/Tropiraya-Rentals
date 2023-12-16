<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Sewa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSewa(Request $request)
    {
        $user = Auth::user()->id;
        $data = new Sewa();
        $jumlahHarga = $request->hargasewa;
        $jumlah = $request->jumlahsewa;
        $jamMulai = Carbon::parse($request->jam_mulai);
        $jamPengembalian = Carbon::parse($request->jam_pengembalian);
        $durasi = $jamPengembalian->diffInHours($jamMulai);
        $harga = $jumlahHarga * $jumlah * $durasi;

        $data->jam_mulai = $request->jam_mulai;
        $data->jam_pengembalian = $request->jam_pengembalian;
        $data->jumlahsewa = $request->jumlahsewa;
        $data->jumlahharga = $harga;
        $data->id_barang = $request->id_barang;
        $data->id_user = $user;
      

        $id_barang = $request->id_barang;
        $barang = Barang::find($id_barang);
        if ($barang->jumlahBarang < $request->jumlahsewa) {
            return redirect()->back()->with('error', 'Stok barang tidak mencukupi.');
        }
        $barang->jumlahBarang -= $request->jumlahsewa;

        $barang->save(); 
        $data->save();
        return redirect()->route('user.transaksi')->with('success', 'Transaksi Behasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Barang::find($id);
        return view('user.formSewa',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
