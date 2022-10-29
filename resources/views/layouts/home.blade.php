<!doctype html>
<html lang="zxx">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/animate.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/owl.carousel.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/fontawesome.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/odometer.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/magnific-popup.min.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/slick.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('user')}}/css/responsive.css">

        <title>Palang Merah Indonesia - Kab Bone</title>

        <link rel="icon" type="image/png" href="{{url('images')}}/PMI-logo.png">
</head>

<body data-spy="scroll" data-offset="120">

        <!-- Start Preloader Area -->
        <div class="preloader">
                <div class="preloader">
                        <span></span>
                        <span></span>
                </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <div class="container-fluid">
                        <div class="logo">
                                <a href="/">
                                        <img src="{{url('user')}}/img/PMI.png" alt="image">
                                </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                        <li class="nav-item">
                                                <a href="#home" class="nav-link text-light">
                                                        Home
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="#pesan" class="nav-link text-light">
                                                        Darah
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="#about" class="nav-link text-light">
                                                        About
                                                </a>
                                        </li>

                                        <li class="nav-item">
                                                <a href="#features" class="nav-link text-light">
                                                        FAQ
                                                </a>
                                        </li>

                                </ul>



                                <div class="others-option">
                                        <div class="d-flex row align-items-center">
                                                @if(Auth::check())
                                                <div class="col-6 option-item">
                                                        <a href="{{route('profile')}}"><button class="default-btn">Profile<span></span></button></a>
                                                </div>
                                                @endif
                                                <div class="col-6 option-item">
                                                        @if(Auth::check())
                                                        <form action="{{route('logout')}}" method="post">
                                                                @csrf
                                                                <button type="submit" class="default-btn">Logout<span></span></button>
                                                        </form>
                                                        @else
                                                        <a href="{{ route('login') }}" class="default-btn">
                                                                Login
                                                                <span></span>
                                                        </a>
                                                        @endif
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </nav>
        <!-- End Navbar Area -->

        @yield('content')

        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                        <div class="single-footer-widget">
                                                <a href="#" class="logo">
                                                        <h2>PMI BONE</h2>
                                                </a>
                                                <p>Donor darah adalah orang yang memberikan darah secara sukarela untuk maksud dan tujuan transfusi darah bagi orang lain yang membutuhkan.</p>
                                                <ul class="social-list">
                                                        <li>
                                                                <a href="#" target="_blank">
                                                                        <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#" target="_blank">
                                                                        <i class="fab fa-twitter"></i>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#" target="_blank">
                                                                        <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#" target="_blank">
                                                                        <i class="fab fa-instagram"></i>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                        <!-- <div class="single-footer-widget pl-5">
                                                <h3>Company</h3>
                                                <ul class="list">
                                                        <li>
                                                                <a href="#">
                                                                        About
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        Carrers
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        Awards
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        User Program
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        Locations
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                        Login
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div> -->
                                </div>
                        </div>
                </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copy-right">
                <div class="container">
                        <div class="copy-right-content">
                                <p>
                                        Copyright © 2022 Fihaa
                                </p>
                        </div>
                </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
                <i class="fa fa-chevron-up"></i>
                <i class="fa fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- jQuery Min JS -->
        <script src="{{url('user')}}/js/jquery-3.5.1.min.js"></script>
        <!-- Popper Min JS -->
        <script src="{{url('user')}}/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{url('user')}}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{url('user')}}/js/owl.carousel.min.js"></script>
        <!-- Appear JS -->
        <script src="{{url('user')}}/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
        <script src="{{url('user')}}/js/odometer.min.js"></script>
        <!-- Slick JS -->
        <script src="{{url('user')}}/js/slick.min.js"></script>
        <!-- Particles JS -->
        <script src="{{url('user')}}/js/particles.min.js"></script>
        <!-- Ripples JS -->
        <script src="{{url('user')}}/js/jquery.ripples-min.js"></script>
        <!-- Popup JS -->
        <script src="{{url('user')}}/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW Min JS -->
        <script src="{{url('user')}}/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{url('user')}}/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="{{url('user')}}/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="{{url('user')}}/js/contact-form-script.js"></script>
        <!-- Main JS -->
        <script src="{{url('user')}}/js/main.js"></script>
</body>

</html>