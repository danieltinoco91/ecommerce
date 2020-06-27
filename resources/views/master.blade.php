<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>E commerce</title>
        <meta name="description" content="" />
        <meta name="Author" content="DTL" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
    </head>


    <body class="smoothscroll enable-animation">

        <!-- wrapper -->
        <div id="wrapper">

            <!-- Top Bar -->
            <div id="topBar" class="dark">
                <div class="container">

                    <!-- right -->
                    <ul class="top-links list-inline float-right">
                        <li class="text-welcome hidden-xs-down">Welcome to Smarty, <strong>John Doe</strong></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs-down"></i> MY ACCOUNT</a>
                            <ul class="dropdown-menu float-right">

                                <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs-down"><a href="/login">LOGIN</a></li>
                        <li class=""><a href="/checkout">
                                <span class="badge badge-aqua ">2</span>
                                <i class="fa fa-shopping-cart"></i> Cart
                            </a></li>
                    </ul>

                    <!-- left -->
                    <ul class="top-links list-inline">
                        <li class="hidden-xs-down"><a href="/">HOME</a></li>

                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
                            <ul class="dropdown-langs dropdown-menu">
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/de.png" width="16" height="11" alt="lang" /> GERMAN</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">USD</a>
                            <ul class="dropdown-langs dropdown-menu">
                                <li><a tabindex="-1" href="#">USD</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">EUR</a></li>
                                <li><a tabindex="-1" href="#">GBP</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>



            @yield('content')

            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">

                    <div class="row fs-13">

                        <!-- col #1 -->
                        <div class="col-md-4 col-sm-4">


                            <h2>(800) 123-4567</h2>

                            <!-- Social Icons -->
                            <div class="clearfix">

                                <a href="#" class="social-icon social-icon-sm social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-sm social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-sm social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-sm social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-sm social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>

                            </div>
                            <!-- /Social Icons -->

                        </div>
                        <!-- /col #1 -->

                        <!-- col #2 -->
                        <div class="col-md-8 col-sm-8">

                            <div class="row">

                                <div class="col-md-5 hidden-sm hidden-xs-down">
                                    <h4 class="letter-spacing-1">RECENT NEWS</h4>
                                    <ul class="list-unstyled footer-list half-paddings">
                                        <li>
                                            <a class="block" href="#">FREE SHIPPING & RETURN</a>
                                            <small>June 29, 2020</small>
                                        </li>
                                        <li>
                                            <a class="block" href="#">ONLINE SUPPORT 24/7</a>
                                            <small>June 29, 2020</small>
                                        </li>
                                        <li>
                                            <a class="block" href="#">Lorem Ipsum Dolor</a>
                                            <small>June 29, 2020</small>
                                        </li>
                                        <li>
                                            <a class="block" href="#">Lorem Ipsum Dolor</a>
                                            <small>June 29, 2020</small>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3 hidden-sm hidden-xs-down">
                                    <h4 class="letter-spacing-1">EXPLORE US</h4>
                                    <ul class="list-unstyled footer-list half-paddings b-0">
                                        <li><a class="block" href="#"><i class="fa fa-angle-right"></i> About Me</a></li>
                                        <li><a class="block" href="#"><i class="fa fa-angle-right"></i> Services</a></li>
                                        <li><a class="block" href="#"><i class="fa fa-angle-right"></i> Careers</a></li>
                                        <li><a class="block" href="#"><i class="fa fa-angle-right"></i> Gallery</a></li>
                                        <li><a class="block" href="#"><i class="fa fa-angle-right"></i> FAQ</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="letter-spacing-1">SECURE PAYMENT</h4>
                                    <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet.</p>
                                    <p>	<!-- see assets/images/_smarty/cc/ for more icons -->
                                        <img src="assets/images/_smarty/cc/Visa.png" alt="" />
                                        <img src="assets/images/_smarty/cc/Mastercard.png" alt="" />
                                        <img src="assets/images/_smarty/cc/Maestro.png" alt="" />
                                        <img src="assets/images/_smarty/cc/PayPal.png" alt="" />
                                    </p>
                                </div>

                            </div>

                        </div>
                        <!-- /col #2 -->

                    </div>

                </div>

                <div class="copyright">
                    <div class="container">
                        <ul class="float-right m-0 list-inline mobile-block">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li>&bull;</li>
                            <li><a href="#">Privacy</a></li>
                        </ul>

                        &copy; All Rights Reserved, Company DTL
                    </div>
                </div>

            </footer>
            <!-- /FOOTER -->



        </div>
        <!-- /wrapper -->






        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script>var plugin_path = 'assets/plugins/';</script>
        <script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>

        <script src="assets/js/scripts.js"></script>



        <!-- PAGE LEVEL SCRIPTS -->
        <script src="assets/js/view/demo.shop.js"></script>
    </body>
</html>