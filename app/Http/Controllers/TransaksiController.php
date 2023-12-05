<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $data = Sewa::with('user','barang')->where('id_user',$user)->get();
        $title = 'Batalkan Transaksi?';
        $text = "Apakah Kamu Yakin Akan Membatalkan Transaksi Ini?";
        confirmDelete($title, $text);
        return view('user.transaksi',compact('data'));
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
    public function storeTransaksi(Request $request)
    {
        $data = new Transaksi();
        $data->id_sewa = $request->id_sewa;
        if ($request->hasFile('fototransaksi')) {
            $foto_transaksi = $request->file('fototransaksi')->store('fototransaksi');
            $data->fototransaksi = $foto_transaksi;
        }
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function showPembayaran(string $id)
    {
        $data = Sewa::with('barang','transaksi')->findOrFail($id);
        return view('user.pembayaran',compact('data'));
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
        $data = Sewa::find($id);
        $data->delete();
        return redirect()->route('user.transaksi');
    }
}
