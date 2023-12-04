<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view('admin.barang.view_barang', compact('data'));
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
        return view('admin.barang.add_barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Barang();
        $data->namaBarang = $request->namaBarang;
        $data->jumlahBarang = $request->jumlahBarang;
        $data->merek = $request->merek;
        if ($request->hasFile('fotobarang')) {
            $foto_barang = $request->file('fotobarang')->store('fotobarang');
            $data->fotobarang = $foto_barang;
        }
        $data->deskripsiBarang = $request->deskripsiBarang;
        $data->save();
        return redirect()->route('barang.view');
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
        $editData = Barang::Find($id);
        return view('admin.barang.edit_barang', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Barang::find($id);
        $data->namaBarang = $request->namaBarang;
        $data->jumlahBarang = $request->jumlahBarang;
        $data->merek = $request->merek;
        if ($request->hasFile('fotobarang')) {
            $foto_barang = $request->file('fotobarang')->store('fotobarang');
            $data->fotobarang = $foto_barang;
        }
        $data->deskripsiBarang = $request->deskripsiBarang;
        $data->update();
        return redirect()->route('barang.view')->with('Success', 'Update Barang berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('barang.view');
    }
}