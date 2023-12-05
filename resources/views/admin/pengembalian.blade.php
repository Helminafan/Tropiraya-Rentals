@extends('admin.master')
@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pengembalian Barang</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables,</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Pengembalian Barang Rentals</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{ route('admin.konfirmasipengembalian', $data->id) }}"
                    class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="waktu_pengembalian" class="form-label">Waktu Pengembalian</label>
                        <input type="time" name="waktu_pengembalian" class="form-control" id="waktu_pengembalian" />
                    </div>
                    <div class="col-md-6" hidden>
                        <label for="waktu_peminjaman" class="form-label">Waktu Peminjam</label>
                        <input type="time" name="waktu_peminjaman"
                            value="{{ $data->pengembalianSewa->jam_pengembalian }}" class="form-control"
                            id="waktu_peminjaman" />
                    </div>
                    <div class="col-md-6" hidden>
                        <label for="denda" class="form-label">Denda keterlambatan</label>
                        <input type="text" name="denda" value="{{ $data->pengembalianSewa->barang->hargasewa }}"
                            class="form-control" id="denda" />
                    </div>
                    <div class="col-md-6" hidden>
                        <label for="denda" class="form-label">jumlahsewa</label>
                        <input type="text" name="jumlahsewa" value="{{ $data->pengembalianSewa->jumlahsewa }}"
                            class="form-control" id="denda" />
                    </div>
                    <div class="col-md-6" hidden>
                        <label for="denda" class="form-label">id_barang</label>
                        <input type="text" name="id_barang" value="{{ $data->pengembalianSewa->barang->id }}"
                            class="form-control" id="denda" />
                    </div>
                    <div class="col-md-6">
                        <label for="denda_kerusakan" class="form-label">Denda Kerusakan</label>
                        <input type="text" name="denda_kerusakan" class="form-control" id="denda_kerusakan" />
                    </div>

                    <div class="col-12 mt-4">
                        @if ($data->status_pengembalian == 0)
                            <button type="submit" class="btn btn-warning">Input</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
