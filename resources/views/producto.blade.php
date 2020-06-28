@extends('master')

@section('content')
<section class="page-header page-header-xs">
    <div class="container">

        <h1>{{$product->name}}</h1>


    </div>
</section>
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 col-sm-9 order-md-2 order-lg-2">

                <div class="row">

                    <!-- IMAGE -->
                    <div class="col-lg-6 col-sm-6">

                        <div class="thumbnail relative mb-3">

                            <!-- 
                                    IMAGE ZOOM 
                                    
                                    data-mode="mouseover|grab|click|toggle"
                            -->
                            <figure id="zoom-primary" class="zoom" data-mode="mouseover">

                                <a class="lightbox bottom-right"  href="{{ $product->image->getUrl() }}" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

                                <img class="img-fluid" src="{{ $product->image->getUrl() }}" width="1200" height="1500" alt="{{ $product->name }}" />
                            </figure>

                        </div>


                    </div>
                    <!-- /IMAGE -->

                    <!-- ITEM DESC -->
                    <div class="col-lg-6 col-sm-6">                       

                        <!-- price -->
                        <div class="shop-item-price">
                            $ {{ number_format($product->price,2) }}                            
                        </div>
                        <!-- /price -->

                        <hr />

                        <div class="clearfix mb-30">
                            <span class="float-right text-success"><i class="fa fa-check"></i> In Stock</span>
                        </div>

                        <!-- short description -->
                        <p>{{$product->description}}</p>
                        <!-- /short description -->




                        <hr />

                        <!-- FORM -->
                        <form class="clearfix form-inline m-0" method="get" action="shop-cart.html">
                            <input type="hidden" name="product_id" value="1" />

                            <!-- see assets/js/view/demo.shop.js -->
                            <input type="hidden" id="color" name="color" value="yellow" />
                            <input type="hidden" id="qty" name="qty" value="1" />
                            <input type="hidden" id="size" name="size" value="5" />
                            <!-- see assets/js/view/demo.shop.js -->

                            <div class="btn-group float-left product-opt-color">
                                <button type="button" class="btn btn-default dropdown-toggle product-color-dd rad-0" data-toggle="dropdown">&nbsp;

                                    <span id="product-selected-color" class="tag shop-color" style="background-color:#F0E68C"></span>
                                </button>

                                <!-- 
                                        href = required to be hex color starting with: #
                                        data-val = color name or color id from the database 
                                -->
                                <ul id="product-color-dd" class="dropdown-menu clearfix" role="menu">
                                    <li class="active"><a class="tag shop-color" data-val="purple" href="#800080" style="background-color:#800080"></a></li>
                                    <li><a class="tag shop-color" data-val="red" href="#FF0000" style="background-color:#FF0000"></a></li>
                                    <li><a class="tag shop-color" data-val="pink" href="#FF0080" style="background-color:#FF0080"></a></li>
                                    <li><a class="tag shop-color" data-val="orange" href="#FF6600" style="background-color:#FF6600"></a></li>
                                    <li><a class="tag shop-color" data-val="grey" href="#E0DCC8" style="background-color:#E0DCC8"></a></li>
                                    <li><a class="tag shop-color" data-val="yellow" href="#F0E68C" style="background-color:#F0E68C"></a></li>
                                    <li><a class="tag shop-color" data-val="light-yellow" href="#FFFFD0" style="background-color:#FFFFD0"></a></li>
                                    <li><a class="tag shop-color" style="background-color:#4B0082"></a></li>
                                    <li><a class="tag shop-color" data-val="dark-grey" href="#666666" style="background-color:#666666"></a></li>
                                    <li><a class="tag shop-color" data-val="green" href="#00FF00" style="background-color:#00FF00"></a></li>
                                </ul>
                            </div><!-- /btn-group -->

                            <div class="btn-group float-left product-opt-size">
                                <button type="button" class="btn btn-default dropdown-toggle product-size-dd rad-0" data-toggle="dropdown">

                                    Size <small id="product-selected-size">(<span>5</span>)</small>
                                </button>

                                <!-- data-val = size value or size id -->
                                <ul id="product-size-dd" class="dropdown-menu" role="menu">
                                    <li class="active"><a data-val="5" href="#">5</a></li>
                                    <li><a data-val="5.5" href="#">5.5</a></li>
                                    <li><a data-val="6" href="#">6</a></li>
                                    <li><a data-val="6.5" href="#">6.5</a></li>
                                    <li><a data-val="7" href="#">7</a></li>
                                    <li><a data-val="7.5" href="#">7.7</a></li>
                                    <li><a data-val="8" href="#">8</a></li>
                                    <li><a data-val="8.5" href="#">8.5</a></li>
                                    <li><a data-val="9" href="#">9</a></li>
                                    <li><a data-val="9.5" href="#">9.5</a></li>
                                    <li><a data-val="10" href="#">10</a></li>
                                    <li><a data-val="10.5" href="#">10.5</a></li>
                                    <li><a data-val="11" href="#">11</a></li>
                                    <li><a data-val="11.5" href="#">11.5</a></li>
                                    <li><a data-val="12" href="#">12</a></li>
                                    <li><a data-val="13" href="#">13</a></li>
                                    <li><a data-val="14" href="#">14</a></li>
                                </ul>
                            </div><!-- /btn-group -->

                            <div class="btn-group float-left product-opt-qty">
                                <button type="button" class="btn btn-default dropdown-toggle product-qty-dd rad-0" data-toggle="dropdown">

                                    Qty <small id="product-selected-qty">(<span id="txtQty">5</span>)</small>
                                </button>

                                <ul id="product-qty-dd" class="dropdown-menu clearfix" role="menu">
                                    <li class="active"><a data-val="1" href="#">1</a></li>
                                    <li><a data-val="2" href="#">2</a></li>
                                    <li><a data-val="3" href="#">3</a></li>
                                    <li><a data-val="4" href="#">4</a></li>
                                    <li><a data-val="5" href="#">5</a></li>
                                    <li><a data-val="6" href="#">6</a></li>
                                    <li><a data-val="7" href="#">7</a></li>
                                    <li><a data-val="8" href="#">8</a></li>
                                    <li><a data-val="9" href="#">9</a></li>
                                    <li><a data-val="10" href="#">10</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <br/>
                            <button type="button" onclick="addCart({id:<?= $product->id ?>, name: '<?= $product->name ?>', description: 'id:<?= $product->description ?>', price: '<?= '$ ' . $product->price ?>', slug: '<?= $product->slug ?>', img: '<?= $product->image->getUrl() ?>', cantidad: $('#txtQty').text()})" class="btn btn-primary float-left product-add-cart rad-0">ADD TO CART</button>
                        </form>
                        <!-- /FORM -->


                        <hr />

                        <!-- Share -->
                        <div class="float-right">

                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>

                        </div>
                        <!-- /Share -->




                    </div>
                    <!-- /ITEM DESC -->

                </div>
            </div>

            <!-- LEFT -->
            <div class="col-lg-3 col-md-3 col-sm-3 order-md-1 order-lg-1">



                <!-- BANNER ROTATOR -->
                <div class="owl-carousel buttons-autohide controlls-over mb-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"fadeUp"}'>
                    <a href="#">
                        <img class="img-fluid" src="demo_files/images/shop/banners/off_1.png" width="270" height="350" alt="">
                    </a>
                    <a href="#">
                        <img class="img-fluid" src="demo_files/images/shop/banners/off_2.png" width="270" height="350" alt="">
                    </a>
                </div>
                <!-- /BANNER ROTATOR -->

            </div>

        </div>

    </div>
</section>
@endsection