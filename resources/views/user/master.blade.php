<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="{{ asset('user/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        @include('user.component.navbar')
        <!-- end header section -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Product Grid</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- product section -->
    @yield('user')
    <!-- end product section -->
    <!-- footer section -->
    @include('user.component.footer')
    <!-- footer section -->
    <!-- jQery -->
    <script src="{{ asset('user/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('user/js/bootstrap.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('user/js/custom.js') }}"></script>
</body>

</html>
