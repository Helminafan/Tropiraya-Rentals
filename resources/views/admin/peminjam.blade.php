@extends('admin.master')

@section('admin')
<div class="container-fluid" style="margin-top: 50px">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Peminjam</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>362155401148</td>
                        <td>1E</td>
                        <td>Teknik Rekayasa Perangkat Lunak</td>
                        <td><a href="" class="btn btn-success">Mengembalikan</a></td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>362155401121</td>
                        <td>3B</td>
                        <td>Manajemen Bisnis Pariwisata</td>
                        <td><a href="" class="btn btn-success">Mengembalikan</a></td>
                    
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>362155421010</td>
                        <td>2A</td>
                        <td>Teknik Sipil</td>
                        <td><a href="" class="btn btn-danger">Belum Mengembalikan</a></td>
                        
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>362155421023</td>
                        <td>2A</td>
                        <td>Teknik Manufaktur Kapal</td>
                        <td><a href="" class="btn btn-danger">Belum Mengembalikan</a></td>
                        
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection