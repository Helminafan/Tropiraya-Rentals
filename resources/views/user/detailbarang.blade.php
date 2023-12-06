@extends('user.master')
@section('user')
    <section class="product_section layout_padding m-5">
      <div class="container">
        <div class="heading_container heading_center m-5">
          <h2>Our <span>products</span></h2>
        </div>

        <div class="card">
          <div class="row">
            <div class="col box">
              <div class="img-box" style="height: 300px">
                <img src="{{asset ('storage/'.$data->fotobarang) }}" alt="" />
              </div>
            </div>
            <div class="col">
              <h1 style="font-weight: 700; font-family: Arial, Helvetica, sans-serif; margin-top: 10px;">{{$data->nam}}</h1>
              <h3 style=" font-weight: 300; font-family: Arial, Helvetica, sans-serif">Spesifikasi Produk</h3>
              <div class="row" style="margin-top: 20px">
                <div class="col">
                  <h6>Merek :</h6>
                </div>
                <div class="col" style="margin-right: 300px">
                  <h5>{{$data->merek}}</h5>
                </div>
              </div>
              <div class="row" style="margin-top: 10px">
                <div class="col">
                  <h6>Jumlah :</h6>
                </div>
                <div class="col" style="margin-right: 300px">
                  <h5>{{$data->jumlahBarang}}</h5>
                </div>
              </div>

              <p>{{$data->deskripsiBarang}}</p>
                <a href="{{route ('user.formSewa',$data->id) }}"> Pinjam Sekarang </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection