@extends('admin.master')

@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Peminjam</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table table-bordered  table-hover table-striped table-responsive " id="dataTable"
                        width="100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Disewa</th>
                                <th>Waktu Di Sewa</th>
                                <th>Jam Mulai</th>
                                <th>Jam Berakhir</th>
                                <th>Denda Keterlambatan</th>
                                <th>Denda Kerusakan</th>
                                <th>Total Denda</th>
                                <th>Jam Dikembalikan</th>
                                <th>Status Penyewaan</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->barang->namaBarang }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->jam_mulai }}</td>
                                    <td>{{ $item->jam_pengembalian }}</td>
                                    <td>
                                        @if ($item->transaksi)
                                            {{ $item->transaksi->denda_keterlambatan }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->transaksi)
                                            {{ $item->transaksi->denda_kerusakan }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->transaksi)
                                            {{ $item->transaksi->total_denda }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->transaksi)
                                            {{ $item->transaksi->waktu_pengembalian }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->transaksi)
                                            @if ($item->transaksi->status_pengembalian== 1)
                                            <a href=""
                                                class="btn btn-success">Mengembalikan</a>
                                            @endif
                                            @if ($item->transaksi->status_pengembalian == 0)
                                                <a href="{{ route('admin.pengembalian', $item->transaksi->id) }}"
                                                    class="btn btn-danger">belum mengembalikan</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->transaksi)
                                            @if ($item->transaksi->status_transaksi == 1)
                                                <a href="{{ route('admin.cekpembayaran', $item->transaksi->id) }}"
                                                    class="btn btn-success">Dikonfirmasi</a>
                                            @endif
                                            @if ($item->transaksi->status_transaksi == 0)
                                                <a href="{{ route('admin.cekpembayaran', $item->transaksi->id) }}"
                                                    class="btn btn-danger">belum dikonfirmasi</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <a data-confirm-delete="true" class="btn btn-sm btn-danger" href="{{route('admin.deletepeminjam',$item->id)}} ">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
