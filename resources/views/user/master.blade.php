<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TropiRaya Rentals</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landingPage/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landingPage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landingPage/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landingPage/css/style.css') }}" rel="stylesheet">
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
            <a href="/" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="{{ asset('landingPage/img/icon-deal.png') }}" alt="Icon"
                        style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">TropiRaya Rentals</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('user.barang') }}" class="nav-item nav-link {{ request()->is('user/barang*') ? 'active' : '' }}">Alat</a>
                    <a href="{{ route('user.transaksi') }}" class="nav-item nav-link {{ request()->is('user/transaksi*') ? 'active' : '' }}">Peminjaman</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                @auth
                    <a href="" class="btn btn-primary px-3  d-block d-lg-flex"
                        id="login">{{ Auth::user()->name }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="width: 100%" class="btn btn-light  px-3 d-block d-lg-flex"
                            id="login">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary px-3 d-block d-lg-flex" id="login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-light px-3 d-block d-lg-flex"
                        id="register">Register</a>
                @endauth
            </div>
        </nav>
    </header>
    <!-- Navbar End -->

    <!-- Hero Container Start -->
    @include('sweetalert::alert')
    @yield('user')
    <!-- Hero Container End -->



    <!-- Footer Start -->
    <footer id="contact">
        <div class="footer-content">
            <ul class="socials">
                <li><a href="mailto:info@kebunraya.id"><i class="fa-regular fa-envelope"></i>info@kebunraya.id</a>
                </li>
                <li><a href="tel:+6281197115933"><i class="fa-solid fa-phone"></i>(+62) 811 - 9711 - 5933</a>
                </li>
                <li><a href="https://maps.app.goo.gl/Yxqef2AsJyx2zPBE9"><i class="fa-solid fa-location-dot"></i>Jl.
                        Kebun Raya,Bali. 82191.</a>
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
    <script src="{{ asset('landingPage/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landingPage/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landingPage/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landingPage/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landingPage/js/main.js') }}"></script>
    <script src="{{ asset('user/js/validasi.js') }}"></script>
    @stack('js')
</body>

</html>
