@extends('user.master')
@section('user')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert alert-success">
                        Invoice Pembayaran Anda
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Merek tenda</th>
                                <td>:</td>
                                <td>{{ $data->barang->merek }}</td>
                            </tr>
                            <tr>
                                <th>Jam Mulai Sewa</th>
                                <td>:</td>
                                <td>{{ $data->jam_mulai }}</td>
                            </tr>
                            <tr>
                                <th>Jam Berakhir</th>
                                <td>:</td>
                                <td>{{ $data->jam_pengembalian }}</td>
                            </tr>
                            <tr>
                                <th>Biaya Sewa Perjam</th>
                                <td>:</td>
                                <td>Rp.{{ $data->barang->hargasewa }},-</td>
                            </tr>
                            <tr>
                                <th>Jumlah Sewa</th>
                                <td>:</td>
                                <td>{{ $data->jumlahsewa }}</td>
                            </tr>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success">Rp.{{ $data->jumlahharga }},-</button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header alert alert-primary">
                        Informasi Pembayaran
                    </div>
                    <div class="card-body">
                        <p class="text-success mb-3">Silahkan melakukan pembayaran melalui nomor rekening di bawah ini :</p>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank Mandiri 1212423344</li>
                            <li class="list-group-item">Bank BCA 645623534</li>
                            <li class="list-group-item">Bank BNI 56435645</li>
                        </ul>
                        @if (empty($data->transaksi))
                            <button style="width: 100%;" type="button" class="btn btn-sm btn-danger mt-3"
                                data-toggle="modal" data-target="#exampleModal">
                                Upload Bukti Pembayaran
                            </button>
                        @elseif($data->transaksi->status_transaksi == '0')
                            <button style="width: 100%;" class="btn btn-sm btn-warning mt-3"><i class="fa-regular fa-clock"></i>
                                Menunggu Konfirmasi</button>
                        @elseif($data->transaksi->status_transaksi == '1')
                            <button style="width: 100%;" class="btn btn-sm btn-success mt-3"><i class="fa-solid fa-check"></i>
                                Pembayaran Selesai</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload bukti pembayaran anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="validasi" action="{{ route('user.storeTransaksi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Upload Bukti Pembayaran</label>
                            <input type="hidden" name="id_sewa" value="{{ $data->id }}">
                            <input type="file" name="fototransaksi" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#validasi").validate({
                rules: {
                    fototransaksi: {
                        required: true,
                    },
                  
                },
               
            });

            // Menambahkan aturan kustom untuk membandingkan waktu
          
        });
    </script>
@endpush
