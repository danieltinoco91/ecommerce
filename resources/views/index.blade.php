@extends('master')

@section('content')
<script src="assets/js/knockout.js"></script>
<script src="assets/js/init.js"></script>
<!-- SLIDER -->
<section class="pt-40">
    <div class="container">

        <!-- OWL SLIDER -->
        <div class="owl-carousel buttons-autohide controlls-over m-0" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}'>

            <div>
                <img class="img-fluid" src="demo_files/images/shop/banners/home_slider_2.jpg" alt="">
            </div>
            <a href="#">
                <img class="img-fluid" src="demo_files/images/shop/banners/home_slider_1.jpg" alt="">
            </a>
        </div>
        <!-- /OWL SLIDER -->


        <!-- INFO BAR -->
        <div class="info-bar info-bar-clean info-bar-bordered mb-0">
            <div class="container">

                <div class="row">

                    <div class="col-sm-4">
                        <i class="glyphicon glyphicon-globe"></i>
                        <h3>FREE SHIPPING &amp; RETURN</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>

                    <div class="col-sm-4">
                        <i class="glyphicon glyphicon-usd"></i>
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="col-sm-4">
                        <i class="glyphicon glyphicon-flag"></i>
                        <h3>ONLINE SUPPORT 24/7</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                </div>

            </div>
        </div>
        <!-- /INFO BAR -->

    </div>
</section>
<!-- /SLIDER -->


<!-- FEATURED -->
<section class="pb-0">
    <div class="container">

        <div class="row">

            <div class="col-sm-9 order-sm-2">

                <h1 class="fs-17 mb-20">FEATURED PRODUCTS</h1>

                <ul class="shop-item-list row list-inline m-0">
                    <!--ko foreach:lproducts-->
                    <li class="col-lg-3 col-sm-3">
                        <div class="shop-item">
                            <div class="thumbnail">                               
                                <a class="shop-item-image" data-bind="attr: {'href':'/'+slug}">
                                    <img class="img-fluid" data-bind="attr: {'src':img,'alt':name}" />                                    
                                </a>
                                <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->                                   
                                    <a class="btn btn-light" data-bind="click: addCart" href="#"><i class="fa fa-cart-plus fs-20"></i></a>
                                </div>
                            </div>
                            <div class="shop-item-summary text-center">
                                <h2 data-bind="text: name"></h2>                                                                                                
                                <div class="shop-item-price">                                    
                                    <span data-bind="text: price"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--/ko-->

                </ul>


            </div>

            <div class="col-sm-3 order-sm-1">

                <!-- BANNER ROTATOR -->
                <div class="owl-carousel buttons-autohide controlls-over mb-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
                    <a href="#">
                        <img class="img-fluid" src="demo_files/images/shop/banners/off_1.png" width="270" height="350" alt="">
                    </a>
                    <a href="#">
                        <img class="img-fluid" src="demo_files/images/shop/banners/off_2.png" width="270" height="350" alt="">
                    </a>
                </div>
                <!-- /BANNER ROTATOR -->


                <!-- FREE RETURNS -->
                <div class="mb-60">
                    <h4>FREE RETURNS</h4>
                    <p class="m-0">We stand behind our goods and services and want you to be satisfied with them.</p>
                    <a href="#">Returns Policy &raquo;</a>
                </div>
                <!-- /FREE RETURNS -->

            </div>

        </div>

    </div>
</section>
<!-- /FEATURED -->






<!-- BRANDS -->
<section class="section-xs">
    <div class="container">
        <div class="text-center">
            <div class="owl-carousel m-0" data-plugin-options='{"singleItem": false, "autoPlay": 3000}'>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/1.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/2.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/3.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/4.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/5.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/6.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/7.jpg" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="demo_files/images/brands/8.jpg" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- BRANDS -->

<!-- PRELOADER -->
<div id="preloader2">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->
<script>
    $(document).ready(function () {
        init_products();
    });
</script>
@endsection
