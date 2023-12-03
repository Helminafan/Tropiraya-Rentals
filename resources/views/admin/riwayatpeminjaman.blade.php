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
                <th>Barang Dipinjam</th>
                <th>Jumlah</th>
                <th>Prodi</th>
                <th>Tanggal</th>
              </tr>
            </thead>
           
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>Bola Sepak</td>
                <td>3</td>
                <td>Teknik Rekayasa Perangkat Lunak</td>
                <td>04/03/2023 08:00</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Bola Basket</td>
                <td>3</td>
                <td>Teknik Rekayasa Perangkat Lunak</td>
                <td>04/03/2023 08:00</td>
            
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Bola Voli</td>
                <td>3</td>
                <td>Teknik Rekayasa Perangkat Lunak</td>
                <td>04/03/2023 08:00</td>
                
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Raket</td>
                <td>3</td>
                <td>Teknik Rekayasa Perangkat Lunak</td>
                <td>04/03/2023 08:00</td>
                
              </tr>
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection