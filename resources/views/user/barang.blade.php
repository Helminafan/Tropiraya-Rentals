@extends('user.master')
@section('user')
    <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center mt-5">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($data as $item)
               <div class="col-sm-6 col-md-4 col-lg-3">
                   <div class="box">
                       <div class="option_container">
                           <div class="options">
                               <a href="{{ route('user.formSewa', $item->id) }}" class="option1">
                                   Sewa
                               </a>
                               <a href="{{ route('user.detailbarang', $item->id) }}" class="option2">
                                   Detail
                               </a>
                           </div>
                       </div>
                       <div class="img-box">
                           <img src="{{ asset('storage/' . $item->fotobarang) }}" alt="">
                       </div>
                       <div class="detail-box">
                           <h5>
                               {{ $item->namaBarang }}
                           </h5>
                       </div>
                   </div>
               </div>
           @endforeach
            </div>
            <div class="btn-box m-5" >
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
@endsection