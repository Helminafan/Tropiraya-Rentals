@extends('admin.master')

@section('admin')
    <!-- Konten Halaman Tambah Barang -->
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Barang</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables,</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Tambah Barang Rentals</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{ route('barang.store') }}" class="row g-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <input type="text" name="namaBarang" class="form-control" id="namaBarang" />
                    </div>
                    <div class="col-md-6">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" name="merek" class="form-control" id="merek" />
                    </div>
                    <div class="col-md-6">
                        <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                        <input type="number" name="jumlahBarang" class="form-control" id="jumlahBarang" />
                    </div>
                    <div class="col-md-6">
                        <label for="hargasewa" class="form-label">Harga Sewa</label>
                        <input type="type" name="hargasewa" class="form-control" id="hargasewa" />
                    </div>
                    <div class="col-md-6">
                        <label for="fotobarang" class="form-label">Foto Barang</label>
                        <input type="file" name="fotobarang" class="form-control-file" id="fotobarang" />
                    </div>
                    <div class="col-md-12">
                        <label for="deskripsiBarang" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsiBarang" id="deskripsiBarang" rows="3"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-warning">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#validate").validate({
                rules: {
                    namaBarang: {
                        required: true,
                    },
                    merek: {
                        required: true,
                    },
                    jumlahBarang: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    },
                    hargasewa: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    },
                    hargasewa: {
                        required: true,
                      
                    },
                    deskripsiBarang: {
                        required: true,
                      
                    },
                },
                // messages: {
                //     jam_pengembalian: {
                //         greaterThanStartTime: "Waktu selesai harus setelah waktu mulai.",
                //     },
                // },
            });
        });
    </script>
@endpush