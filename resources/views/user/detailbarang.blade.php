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
                <img src="{{asset ('user/images/p1.png.png') }}" alt="" />
              </div>
            </div>
            <div class="col">
              <h1 style="font-weight: 700; font-family: Arial, Helvetica, sans-serif; margin-top: 10px;">Bola Sepak</h1>
              <h3 style=" font-weight: 300; font-family: Arial, Helvetica, sans-serif">Spesifikasi Produk</h3>
              <div class="row" style="margin-top: 20px">
                <div class="col">
                  <h6>Merek :</h6>
                </div>
                <div class="col" style="margin-right: 300px">
                  <h5>Adidas</h5>
                </div>
              </div>
              <div class="row" style="margin-top: 10px">
                <div class="col">
                  <h6>Jumlah :</h6>
                </div>
                <div class="col" style="margin-right: 300px">
                  <h5>56</h5>
                </div>
              </div>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt perspiciatis eveniet odit earum a pariatur perferendis dolor, itaque culpa?</p>
                <a href="{{route ('user.peminjaman') }}"> Pinjam Sekarang </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection