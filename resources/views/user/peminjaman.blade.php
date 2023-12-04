@extends('user.master')
@section('user')
        <section class="product_section layout_padding m-5">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>Peminjaman <span>Barang</span></h2>
        </div>
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">Featured</div>
            <div class="card-body">
              <div class="row justify-content-center align-items-center">
                <div class="col-sm-5 col-md-1" style="margin-left: 30px;">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                </div>
                <div class="col-sm-5 col-md-2"><img style="height: 72px; width: 95px;" src="{{asset ('user/images/p1.png.png') }}" alt=""></div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><h5 style="font-weight: 600;">Bola Basket</h5></div>
                <div class="col-sm-5 offset-sm-2 col-md-2 offset-md-0"><a type="button" class="btn" style="background-color: #00b98e; color: white;">Lakukan Transaksi</a></div>
              </div>
             
            </div>
          </div>
        
        </div>
      </div>
    </section>
@endsection