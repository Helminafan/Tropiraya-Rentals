@extends('admin.master')
@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Barang-Barang</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables,</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <h6 class="col m-0 font-weight-bold text-primary">DataTables Example</h6>
                    <div class="co">
                        <a href="tambahbarang.html" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Barang</span></a>
                    </div>
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
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td><img src="img/p1.png.png" width="70px" alt="" /></td>
                                <td>Bola Sepak</td>
                                <td>Adidas</td>
                                <td>30</td>
                                <td>
                                    <div class="row">
                                        <a href="editbarang.html" class="col btn btn-success"
                                            style="margin: 0 10px">Edit</a>
                                        <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td><img src="img/pngwing.com (1).png" width="70px" alt="" /></td>
                                <td>Bola Basket</td>
                                <td>Adidas</td>
                                <td>30</td>
                                <td>
                                    <div class="row">
                                        <a href="" class="col btn btn-success" style="margin: 0 10px">Edit</a>
                                        <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td><img src="img/pngwing.com (2).png" width="70px" alt="" /></td>
                                <td>Bola Voli</td>
                                <td>Adidas</td>
                                <td>30</td>
                                <td>
                                    <div class="row">
                                        <a href="" class="col btn btn-success" style="margin: 0 10px">Edit</a>
                                        <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.master')
@section('admin')
<div class="container-fluid" style="margin-top: 50px">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Barang-Barang</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables,</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <div class="row">
                  <h6 class="col m-0 font-weight-bold text-primary">DataTables Example</h6>
                  <div class="co">
                    <a href="{{ route('admin.tambahbarang') }}" class="btn btn-warning btn-icon-split"
                      ><span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                      </span>
                      <span class="text">Tambah Barang</span></a
                    >
                  </div>
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
                        <th>Jumlah</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td><img src="img/p1.png.png" width="70px" alt="" /></td>
                        <td>Bola Sepak</td>
                        <td>Adidas</td>
                        <td>30</td>
                        <td>
                          <div class="row">
                            <a href="{{ route('admin.editbarang') }}" class="col btn btn-success" style="margin: 0 10px">Edit</a>
                            <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <tr class="text-center">
                        <td><img src="img/pngwing.com (1).png" width="70px" alt="" /></td>
                        <td>Bola Basket</td>
                        <td>Adidas</td>
                        <td>30</td>
                        <td>
                          <div class="row">
                            <a href="" class="col btn btn-success" style="margin: 0 10px">Edit</a>
                            <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <tr class="text-center">
                        <td><img src="img/pngwing.com (2).png" width="70px" alt="" /></td>
                        <td>Bola Voli</td>
                        <td>Adidas</td>
                        <td>30</td>
                        <td>
                          <div class="row">
                            <a href="" class="col btn btn-success" style="margin: 0 10px">Edit</a>
                            <a href="" class="col btn btn-danger" style="margin: 0 10px">Hapus</a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection