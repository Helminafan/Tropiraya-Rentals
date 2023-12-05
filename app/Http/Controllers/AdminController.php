<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pengembalian;
use App\Models\Sewa;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sewa::all();
        $title = 'Delete Peminjam!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.peminjam', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dashboard()
    {
        $bulan_ini = now()->format('Y-m');
        $tahun_ini = now()->format('Y');

        $jumlah_data = DB::table('transaksi')
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '$bulan_ini'")
            ->count();

        $jumlah_data_tahun = DB::table('transaksi')
            ->whereRaw("DATE_FORMAT(created_at, '%Y') = '$tahun_ini'")
            ->count();
        $jumlah_pending = DB::table('transaksi')
            ->where('status_transaksi', 0)
            ->count();
        $year = Transaksi::select(DB::raw("DATE_FORMAT(created_at, '%Y') AS year"))
            ->GroupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->OrderBy(DB::raw('created_at'))
            ->pluck('year');

        $bulan = Transaksi::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->OrderBy(DB::raw('Month(created_at)'))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');
        $transaksi_chart = Transaksi::select(DB::raw("CAST(COUNT(*) as int) as pendaftar"))
            ->OrderBy(DB::raw('Month(created_at)'))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('pendaftar');
        $results = DB::table('transaksi')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%M') AS nama_bulan"),
                DB::raw("DATE_FORMAT(created_at, '%Y') AS tahun"),
                DB::raw("COUNT(*) AS daftar")
            )
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M'), DATE_FORMAT(created_at, '%Y')"))
            ->orderBy('created_at')
            ->get();
        return view('admin.dashboard', compact('bulan_ini', 'tahun_ini', 'jumlah_data', 'jumlah_data_tahun', 'year', 'bulan', 'transaksi_chart', 'results','jumlah_pending'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showPembayaran(string $id)
    {
        $data = Transaksi::find($id);
        return view('admin.cekpembayaran', compact('data'));
    }
    public function showPengembalian(string $id)
    {
        $data = Transaksi::find($id);
        return view('admin.pengembalian', compact('data'));
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
    public function konfirmasiPembayaran(Request $request, string $id)
    {
        $data = Transaksi::find($id);
        $data->status_transaksi = $request->status_transaksi;
        $data->update();
        return redirect()->route('admin.peminjam')->with('success', 'Konfirmasi Behasil!');
    }
    public function konfirmasiPengembalian(Request $request, string $id)
    {
        $data = Transaksi::find($id);
        $peminjaman = Carbon::parse($request->waktu_peminjaman);
        $pengembalian = Carbon::parse($request->waktu_pengembalian);
        $dendaKeterlambatan = $request->denda;
        $kerusakan = $request->denda_kerusakan;
        $durasi = max(0, $peminjaman->diffInHours($pengembalian));
        if ($peminjaman->lt($pengembalian)) {
            $denda = $durasi * $dendaKeterlambatan;
        } else {
            $denda = 0;
        }
        $totalDenda = $denda + $kerusakan;
        $data->waktu_pengembalian = $request->waktu_pengembalian;
        $data->denda_keterlambatan = $denda;
        $data->denda_kerusakan = $request->denda_kerusakan;
        $data->status_pengembalian = true;
        $data->total_denda = $totalDenda;
        
        $id_barang = $request->id_barang;
        $barang = Barang::find($id_barang);
        $barang->jumlahBarang += $request->jumlahsewa;

        $data->update();
        $barang->save();
        return redirect()->route('admin.peminjam')->with('success', 'Konfirmasi Behasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Sewa::find($id);
        if ($data->transaksi) {
            if ($data->transaksi->fototransaksi != null || $data->transaksi->fototransaksi ='' ){
                Storage::delete($data->transaksi->fototransaksi);
            }
        }
        $data->delete();
        return redirect()->route('admin.peminjam');
    }
}
