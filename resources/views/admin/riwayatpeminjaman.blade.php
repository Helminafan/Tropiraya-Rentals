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
                <th>NIK</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Alamat</th>
              </tr>
            </thead>
           
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->nik}}</td>
                <td>{{$item->telp}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->alamat}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection