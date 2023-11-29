@extends('admin.master')

@section('admin')

<div class="container-fluid" style="margin-top: 50px">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Edit Barang</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables,</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Tambah Barang Olahraga</h6>
              </div>
              <div class="card-body">
              <form id="validate" action="{{ route('admin.editbarang') }}" class="row g-3">
                  <div class="col-md-6">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                    <input type="text" name="namaBarang" class="form-control" id="namaBarang" value="Bola Sepak"/>
                  </div>
                  <div class="col-md-6">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" name="marek" class="form-control" id="merek" value="Adidas"/>
                  </div>
                  <div class="col-md-6">
                    <label for="jumlahbarang" class="form-label">Jumlah Barang</label>
                    <input type="number" name="jumlahbarang" class="form-control" id="jumlahbarang" value="30"/>
                  </div>
                  <div class="col-md-6">
                    <label for="fotobarang" class="form-label">Foto Barang</label>
                    <input type="file" name="fotobarang" class="form-control-file" id="fotobarang" />
                  </div>
                  <div class="col-md-12">
                    <label for="deskripsiBarang" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsiBarang" id="deskripsiBarang" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a consequat ex. Aenean sed nibh massa. Morbi tempus congue ex, gravida consectetur urna rutrum id. Praesent sit amet lorem sed odio pharetra fermentum. Nunc ex tortor, hendrerit at hendrerit sit amet, aliquet luctus lacus. Nunc ante lectus, varius nec purus sit amet, cursus auctor ante. Curabitur lectus est, congue ut dui at, consectetur tincidunt ligula. Vestibulum eget magna et nulla fringilla maximus eu eget ante.
                    </textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-warning">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection