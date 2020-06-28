@extends('master')

@section('content')
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="assets/js/knockout.js"></script>
<script src="assets/js/checkout_cart.js"></script>
<script>
    $(document).ready(function () {
        init_products();
    });
</script>
<section class="page-header page-header-xs">
    <div class="container">
        <h1>CHECKOUT</h1>
    </div>
</section>

<section>
    <div class="container">  
        <!--ko if:!checkout()-->
        <div class="row">
            <div class="col-lg-9 col-sm-8">
                <form class="cartContent clearfix" method="post" action="#">

                    <!-- cart content -->
                    <div id="cartContent">
                        <!-- cart header -->
                        <div class="item head clearfix">
                            <span class="cart_img"></span>
                            <span class="product_name fs-13 bold">PRODUCT NAME</span>
                            <span class="remove_item fs-13 bold"></span>
                            <span class="total_price fs-13 bold">TOTAL</span>
                            <span class="qty fs-13 bold">QUANTITY</span>
                        </div>
                        <!-- /cart header -->

                        <!--ko foreach:lproducts-->
                        <div class="item">
                            <div class="cart_img float-left fw-100 p-10 text-left"><img data-bind="attr: {'src':img}" alt="" width="80" /></div>
                            <a data-bind="attr: {'href':'\\'+slug}" class="product_name">
                                <span data-bind="text: name"></span>      
                            </a>
                            <a href="#" data-bind="click: $root.remove" class="remove_item"><i class="fa fa-times"></i></a>
                            <div class="total_price">$<span data-bind="text:total() "></span></div>
                            <div class="qty"><input type="number" data-bind="value: cant" name="qty" maxlength="3" max="999" min="1" /> &times; $ <span data-bind="text:price "></span></div>
                            <div class="clearfix"></div>
                        </div>
                        <!--/ko-->

                        <button class="btn btn-danger mt-20 mr-10 float-right" data-bind="click: emptyCart"><i class="fa fa-remove"></i> CLEAR CART</button>
                        <!-- /update cart -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- /cart content -->

                </form>
            </div>
            <div class="col-lg-3 col-sm-4">                

                <div class="toggle-transparent toggle-bordered-full clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">

                            <span class="clearfix">
                                <span class="float-right" data-bind="text: total"></span>
                                <strong class="float-left">Subtotal:</strong>
                            </span>
                            <span class="clearfix">
                                <span class="float-right">$0.00</span>
                                <span class="float-left">Discount:</span>
                            </span>
                            <span class="clearfix">
                                <span class="float-right">$0.00</span>
                                <span class="float-left">Shipping:</span>
                            </span>

                            <hr />

                            <span class="clearfix">
                                <span class="float-right fs-20" data-bind="text: total"></span>
                                <strong class="float-left">TOTAL:</strong>
                            </span>

                            <hr />

                            <a href="#" data-bind="click: proceed" class="btn btn-primary btn-lg btn-block fs-15"><i class="fa fa-mail-forward"></i> Proceed to Checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/ko-->


        <form class="row clearfix" id="frmCheckOut" method="post" data-bind="visible: checkout()" action="" onsubmit="return false;">

            <div class="col-lg-7 col-sm-7">
                <div class="heading-title">
                    <h4>Billing &amp; Shipping</h4>
                </div>  

                <fieldset class="mt-60">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_firstname">First Name *</label>
                            <input id="billing_firstname" name="firstname" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_lastname">Last Name *</label>
                            <input id="billing_lastname" name="lastname" type="text" class="form-control required" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_email">Email *</label>
                            <input id="billing_email" name="email" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_company">Company</label>
                            <input id="billing_company" name="company" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="billing_address1">Address *</label>
                            <input id="billing_address1" name="address_one" type="text" class="form-control required" placeholder="Address 1" />

                            <input id="billing_address2" name="address_two" type="text" class="form-control mt-10" placeholder="Address 2" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_country">Country *</label>
                            <input id="country" name="country" type="text" class="form-control mt-10" placeholder="Country" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_state">State/Province *</label>
                            <input id="State" name="state" type="text" class="form-control mt-10" placeholder="State/Province" />
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_zipcode">Zip/Postal Code *</label>
                            <input id="billing_zipcode" name="zipcode" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_city">City *</label>
                            <input id="billing_city" name="city" type="text" class="form-control required" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_phone">Phone *</label>
                            <input id="billing_phone" name="phone" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_fax">Fax</label>
                            <input id="billing_fax" name="fax" type="text" class="form-control" />
                        </div>
                    </div>
                    <hr />                        
                </fieldset>                    
            </div>    
            <div class="col-lg-5 col-sm-5">
                <div class="heading-title">
                    <h4>Payment Method</h4>
                </div>
                <fieldset class="mt-60">
                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row mb-0">
                                    <div class="col-lg-12 m-0 clearfix">
                                        <label class="radio float-left mt-0">
                                            <input id="payment_check" name="payment[method]" type="radio" value="1" checked="checked" />
                                            <i></i> <span class="fw-300">Check / Money order</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 m-0 clearfix">
                                        <label class="radio float-left">
                                            <input id="payment_card" name="payment[method]" type="radio" value="2" />
                                            <i></i> <span class="fw-300">Credit Card</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset id="ccPayment" class="mt-30 hide">

                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:name">Name on Card *</label>
                                        <input id="payment:name" name="payment_name" type="text" class="form-control required" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:name">Credit Card Type *</label>
                                        <select id="payment:state" name="payment_state" class="form-control pointer required">
                                            <option value="">Select...</option>
                                            <option value="AE">American Express</option>
                                            <option value="VI">Visa</option>
                                            <option value="MC">Mastercard</option>
                                            <option value="DI">Discover</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_number">Credit Card Number *</label>
                                        <input id="payment:cc_number" name="cc_number" type="text" class="form-control required" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_exp_month">Card Expiration *</label>

                                        <div class="row mb-0">
                                            <div class="col-lg-6 col-sm-6">
                                                <select id="payment:cc_exp_month" name="cc_exp_month" class="form-control pointer required">
                                                    <option value="0">Month</option>
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <select id="payment:cc_exp_year" name="cc_exp_year" class="form-control pointer required">
                                                    <option value="0">Year</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_cvv">CVV2 *</label>
                                        <input id="payment:cc_cvv" name="cc_cvv" type="text" class="form-control required" autocomplete="off" maxlength="4" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </fieldset>
                <div class="toggle-transparent toggle-bordered-full clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">

                            <span class="clearfix">
                                <span class="float-right" data-bind="text: total"></span>
                                <strong class="float-left">Subtotal:</strong>
                            </span>
                            <span class="clearfix">
                                <span class="float-right">$0.00</span>
                                <span class="float-left">Discount:</span>
                            </span>
                            <span class="clearfix">
                                <span class="float-right">$0.00</span>
                                <span class="float-left">Shipping:</span>
                            </span>

                            <hr />

                            <span class="clearfix">
                                <span class="float-right fs-20" data-bind="text: total"></span>
                                <strong class="float-left">TOTAL:</strong>
                            </span>

                            <hr />

                            <button type="button" onclick="saveChecout()" class="btn btn-primary btn-lg btn-block fs-15"><i class="fa fa-mail-forward"></i> Place Order Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
</section>

@endsection