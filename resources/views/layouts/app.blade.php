<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content>
    <meta name="description" content>
    <title>Premat - Product Landing Page</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->

    <!--start header-->
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo -->
                    <a class="logo" href="#"><img src="images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"><i class="icofont-navigation-menu"></i></span>
                    </button>
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/" data-scroll-nav="0">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart" data-scroll-nav="1">Cart
                                    <div id="second-app"><badge-icon></badge-icon></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart" data-scroll-nav="3">Product</a>
                            </li>
                            <li class="nav-item">
                                @if(Auth::guest())
                                    <a class="nav-link" href="{{route('login')}}" data-scroll-nav="4">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}" data-scroll-nav="5">Register</a>
                            </li>
                            @else
                                <a class="nav-link" href="{{route('logout')}}" data-scroll-nav="5">Logout</a>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--end header-->

    <!--start footer-->
    <footer id="footer" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="footer-social">
                        <ul>
                            <li><span>Follow Us:</span></li>
                            <li><a href><i class="icofont-facebook"></i></a></li>
                            <li><a href><i class="icofont-twitter"></i></a></li>
                            <li><a href><i class="icofont-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copyright-text text-right">
                        <p>&copy; Copy 2019. All Rights Reserved By <a href="https://themeforest.net/user/thememeta">thememeta</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->

    <!--jQuery js-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="js/validator.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <!--main js-->
    <script src="js/custom.js"></script>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
