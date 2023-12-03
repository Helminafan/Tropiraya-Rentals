@extends('user.master')
@section('user')
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Alat Kemah <span class="text-primary">Murah Meriah</span> Kebun Raya Bali</h1>
                <p class="animated fadeIn mb-4 pb-2">Setiap manusia berhak atas ketenangan yang ia dambakan. Salah satu cara mendapatkan ketenangan adalah berkemah di <span class="text-primary">Kebun Raya Bali</span> #AYOKEKEBUNRAYA</p>
                <a href="#main-content" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{asset('landingPage/img/heroElement3.jpg')}}" alt="kebun raya">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{asset('landingPage/img/heroElement2.jpg')}}" alt="kebun raya">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <main id="main-content" tabindex="0">
        <!-- Barrier Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;"></div>
        <!-- Barrier End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3" id="facility">Fasilitas Yang Ditawarkan</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <section class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{asset('landingPage/img/pagelines.svg')}}" alt="Icon">
                                </div>
                                <h6>Pohon</h6>
                                <span>Puluhan jenis tanaman</span>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <section class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{asset('landingPage/img/mountain-sun-solid.svg')}}" alt="Icon">
                                </div>
                                <h6>Spot</h6>
                                <span class="desc">10 Spot Terbaik</span>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <section class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{asset('landingPage/img/tent-solid.svg')}}" alt="Icon">
                                </div>
                                <h6>Penyewaan Alat</h6>
                                <span>Lebih dari 10 Alat</span>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <section class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{asset('landingPage/img/cart-shopping-solid.svg')}}" alt="Icon">
                                </div>
                                <h6>Merchandise</h6>
                                <span>Lebih dari 100 barang</span>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="{{('landingPage/img/kebun-raya-bali-1.jpg')}}" alt="Taman">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Salah Satu Lokasi Terbaik Menikmati Pemandangan</h1>
                        <p class="mb-4">Salah satu nikmat Tuhan yang bisa kita nikmati adalah menikmati alam dan pemandangan yang indah. Menikmati pemandangan menggunakan alas dan payung akan lebih nyaman. Salah satu kelebihan dari Kebun Raya Bali kami menyediakan:
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Pemandangan Indah nan Elok</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Penyewaan Alat</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Dapat disewa secara online</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        
    </main>   
@endsection