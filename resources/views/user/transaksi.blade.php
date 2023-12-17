@extends('user.master')
@section('user')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center mt-5">
                <h2>Transaksi <span>Barang</span></h2>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h6 class="col m-0 font-weight-bold text-primary">DataTables Example</h6>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Foto</th>
                                    <th>Nama Barang</th>
                                    <th>Merek</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td><img src="{{asset('storage/'.$item->barang->fotobarang)}}" width="70px" alt="" /></td>
                                        <td>{{$item->barang->namaBarang}}</td>
                                        <td>{{$item->barang->merek}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('user.pembayaran',$item->id)}}" class="col btn btn-success"
                                                    style="margin: 0 10px">Cek Pembayaran</a>
                                                <a data-confirm-delete="true" href="{{route('user.delettransaksi',$item->id)}}" class="col btn btn-danger"
                                                    style="margin: 0 10px">batalkan</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
