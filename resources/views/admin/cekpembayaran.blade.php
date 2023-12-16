@extends('admin.master')
@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cek Pembayaran</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables,</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Cek Pembayaran</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{ route('admin.konfirmasipembayaran', $data->id) }}"
                    class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <center>
                            <a href="{{ asset('storage/' . $data->fototransaksi) }}" download="{{ $data->fototransaksi }}">
                                <img style="width: 500px; border: 1px solid"
                                    src="{{ asset('storage/' . $data->fototransaksi) }}" alt="">
                            </a>
                        </center>
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="text" name="status_transaksi" value="1" class="form-control"
                            id="status_transaksi" />
                    </div>
                    @if ($data->status_transaksi == 0)
                        <div class="col-12 mt-4">
                            <button style="width: 100%" type="submit" class="btn btn-warning">Konfirmasi
                                Pembayaran</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
