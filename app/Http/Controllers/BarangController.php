<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('admin.barang', compact('data'));
    }
    // public function userIndex()
    // {
    //     $data = Barang::all();
    //     return view('user.peminjam', compact('data'));
    // }

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
    public function store(Request $request)
    {
        $data = new Barang();
        $data->tipebarang = $request->tipebarang;
        $data->merek = $request->merek;
        $data->status = $request->status;
        $data->hargasewa = $request->hargasewa;
        if ($request->hasFile('fotobarang')) {
            $foto_barang = $request->file('fotobarang')->store('fotobarang');
            $data->fotobarang = $foto_barang;
        }
        $data->deskripsiBarang = $request->deskripsiBarang;
        $data->save();
        return redirect()->route('admin.barang');
    }

    /**
     * Display the specified resource.
     */
    // public function userShow(string $id)
    // {
    //     $data = Barang::find($id);
    //     return view('user.detailBarang',compact('data'));
    // }

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
