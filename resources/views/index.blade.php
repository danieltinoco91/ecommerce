@extends('master')

@section('content')

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

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p13.jpg" alt="shop first image" />
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p14.jpg" alt="shop hover image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->

											<!-- product more info -->
											<div class="shop-item-info">
												<span class="badge badge-success">NEW</span>
												<span class="badge badge-danger">SALE</span>
											</div>
											<!-- /product more info -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Cotton 100% - Pink Shirt</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												<span class="line-through">$98.00</span>
												$78.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p11.jpg" alt="shop hover image" />
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p3.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Black Long Lady Shirt</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-0 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$128.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p12.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
											
											<!-- countdown -->
											<div class="shop-item-counter" data-text="limited offer">
												<div class="countdown" data-from="January 31, 2020 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
											</div>
											<!-- /countdown -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Night Dress For Ladies</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-1 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$34.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<!-- CAROUSEL -->
												<div class="owl-carousel m-0" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
													<img class="img-fluid" src="demo_files/images/shop/products/300x450/p10.jpg" alt="">
													<img class="img-fluid" src="demo_files/images/shop/products/300x450/p1.jpg" alt="">
													<img class="img-fluid" src="demo_files/images/shop/products/300x450/p14.jpg" alt="">
												</div>
												<!-- /CAROUSEL -->
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->

											<!-- product more info -->
											<div class="shop-item-info">
												<span class="badge badge-success">NEW</span>
											</div>
											<!-- /product more info -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Long Grey Dress - Special</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-5 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$76.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p9.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->


											<!-- product more info -->
											<div class="shop-item-info">
												<span class="badge badge-danger">SALE</span>
											</div>
											<!-- /product more info -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Grey Lady Hat</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												<span class="line-through">$67.00</span>
												$21.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p8.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->

											<!-- countdown -->
											<div class="shop-item-counter" data-text="limited offer">
												<div class="countdown" data-from="December 31, 2017 08:22:01" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
											</div>
											<!-- /countdown -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Beach Black Lady Suit</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$56.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p7.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Town Dress - Black</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$154.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p6.jpg" alt="shop first image" />
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p14.jpg" alt="shop hover image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Chick Lady Fashion</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$167.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<!-- CAROUSEL -->
												<div class="owl-carousel buttons-autohide controlls-over m-0" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
													<img class="img-fluid" src="demo_files/images/shop/products/300x450/p5.jpg" alt="">
													<img class="img-fluid" src="demo_files/images/shop/products/300x450/p1.jpg" alt="">
												</div>
												<!-- /CAROUSEL -->
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Pink Dress 100% Cotton</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$44.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p4.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>White And Black</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$31.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p11.jpg" alt="shop first image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->

											<!-- countdown -->
											<div class="shop-item-counter" data-text="limited offer">
												<div class="countdown" data-from="January 12, 2018 12:34:55" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
											</div>
											<!-- /countdown -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Long Black Top</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												$99.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

								<!-- ITEM -->
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="/shop-single-left">
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p2.jpg" alt="shop first image" />
												<img class="img-fluid" src="demo_files/images/shop/products/300x450/p12.jpg" alt="shop hover image" />
											</a>
											<!-- /product image(s) -->

											<!-- hover buttons -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
												<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-20"></i></a>
											</div>
											<!-- /hover buttons -->

											<!-- product more info -->
											<div class="shop-item-info">
												<span class="badge badge-success">NEW</span>
												<span class="badge badge-danger">SALE</span>
											</div>
											<!-- /product more info -->
										</div>
										
										<div class="shop-item-summary text-center">
											<h2>Black Fashion Hat</h2>
											
											<!-- rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /rating -->

											<!-- price -->
											<div class="shop-item-price">
												<span class="line-through">$77.00</span>
												$65.00
											</div>
											<!-- /price -->
										</div>

									</div>

								</li>
								<!-- /ITEM -->

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



			<!-- NEW PRODUCTS -->
			<section class="pb-0">
				<div class="container">

					<h2 class="owl-featured b-0"><strong>NEW</strong> PRODUCTS</h2>

					<div class="owl-carousel featured m-0 owl-padding-10" data-plugin-options='{"singleItem": false, "items": "6", "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/5.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Blue Dress</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">$98.00</span>
									$78.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/6.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Mobile Phone</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$53.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/7.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Black Shirt</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$68.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/8.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Backpack</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$19.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/9.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Blue Shoes</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$81.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/10.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Water Watch</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$38.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item">

							<div class="thumbnail b-0 p-0">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-fluid" src="demo_files/images/shop/home/products/11.jpg" alt="" />
								</a>
								<!-- /product image(s) -->

								<!-- hover buttons -->
								<div class="shop-option-over">
									<a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus fs-18"></i></a>
								</div>
								<!-- /hover buttons -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2 class="fs-14">Bag</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 fs-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$22.00
								</div>
								<!-- /price -->
							</div>

						</div>
						<!-- /item -->

					</div>

				</div>
			</section>
			<!-- NEW PRODUCTS -->



			<!-- BRANDS -->
			<section class="section-xs">
				<div class="container">

					<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
					-->
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
            @endsection
