<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TropiRaya Rentals</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('user/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Skip To Content -->
    <a href="#main-content" class="skip-link">Menuju ke konten</a>
    <!-- End Skip -->

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <header class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="{{asset('user/img/icon-deal.png')}}" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">TropiRaya Rentals</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Alat</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-flex" id="login">Login</a>
                <a href="" class="btn btn-light px-3 d-none d-lg-flex" id="register">Register</a>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->

    <!-- Hero Container Start -->
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
                        <img class="img-fluid" src="{{asset('user/img/heroElement3.jpg')}}" alt="kebun raya">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{asset('user/img/heroElement2.jpg')}}" alt="kebun raya">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Container End -->

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
                                    <img class="img-fluid" src="{{asset('user/img/pagelines.svg')}}" alt="Icon">
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
                                    <img class="img-fluid" src="{{asset('user/img/mountain-sun-solid.svg')}}" alt="Icon">
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
                                    <img class="img-fluid" src="{{asset('user/img/tent-solid.svg')}}" alt="Icon">
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
                                    <img class="img-fluid" src="{{asset('user/img/cart-shopping-solid.svg')}}" alt="Icon">
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
                            <img class="img-fluid w-100" src="{{('user/img/kebun-raya-bali-1.jpg')}}" alt="Taman">
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

    <!-- Footer Start -->
    <footer id="contact">
        <div class="footer-content">
          <ul class="socials">
            <li><a href="mailto:info@kebunraya.id"><i class="fa-regular fa-envelope"></i>info@kebunraya.id</a>
            </li>
            <li><a href="tel:+6281197115933"><i class="fa-solid fa-phone"></i>(+62) 811 - 9711 - 5933</a>
            </li>
            <li><a href="https://maps.app.goo.gl/Yxqef2AsJyx2zPBE9"><i class="fa-solid fa-location-dot"></i>Jl. Kebun Raya,Bali. 82191.</a>
            </li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p>copyright &copy;2023 <span>Dicoding Indonesia</span></p>
        </div>
      </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>