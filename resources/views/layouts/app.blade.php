<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Classimax | Classified Marketplace Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="classimax" />

    <!-- favicon -->
    <link href="{{ asset('assets/theme/images/favicon.png') }}" rel="shortcut icon">

    <!--
  Essential stylesheets
  =====================================-->
    <link href="{{ asset('assets/theme/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/bootstrap/bootstrap-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/theme/css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">


    @include('layouts.navbar')

    @yield('content')

    <!--============================
=            Footer            =
=============================-->

    <footer class="footer section section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
                    <!-- About -->
                    <div class="block about">
                        <!-- footer logo -->
                        <img src="images/logo-footer.png" alt="logo">
                        <!-- description -->
                        <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!-- Link list -->
                <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
                    <div class="block">
                        <h4>Site Pages</h4>
                        <ul>
                            <li><a href="dashboard-my-ads.html">My Ads</a></li>
                            <li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
                            <li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
                            <li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
                            <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Link list -->
                <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
                    <div class="block">
                        <h4>Admin Pages</h4>
                        <ul>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="single.html">Single Page</a></li>
                            <li><a href="store.html">Store Single</a></li>
                            <li><a href="single-blog.html">Single Post</a>
                            </li>
                            <li><a href="blog.html">Blog</a></li>



                        </ul>
                    </div>
                </div>
                <!-- Promotion -->
                <div class="col-lg-4 col-md-7">
                    <!-- App promotion -->
                    <div class="block-2 app-promotion">
                        <div class="mobile d-flex  align-items-center">
                            <a href="index.html">
                                <!-- Icon -->
                                <img src="{{ asset('assets/theme/images/footer/phone-icon.png') }}" alt="mobile-icon">
                            </a>
                            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
                        </div>
                        <div class="download-btn d-flex my-3">
                            <a href="index.html"><img
                                    src="{{ asset('assets/theme/images/apps/google-play-store.png') }}"
                                    class="img-fluid" alt=""></a>
                            <a href="index.html" class=" ml-3"><img
                                    src="{{ asset('assets/theme/images/apps/apple-app-store.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                    <!-- Copyright -->
                    <div class="copyright">
                        <p>Copyright &copy;
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. Designed & Developed by <a class="text-white"
                                href="https://themefisher.com">Themefisher</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Social Icons -->
                    <ul class="social-media-icons text-center text-lg-right">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
                        <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
                        <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
                        <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class="scroll-top-to">
            <i class="fa fa-angle-up"></i>
        </div>
    </footer>

    <!--
Essential Scripts
=====================================-->
    <script src="{{ asset('assets/theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/bootstrap/bootstrap-slider.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/tether/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/raty/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/theme/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{ asset('assets/theme/plugins/google-map/map.js') }}" defer></script>

    <script src="{{ asset('assets/theme/js/script.js') }}"></script>

</body>

</html>
