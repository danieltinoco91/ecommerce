@extends('master')

@section('content')
<section style="background:url('demo_files/images/wall2.jpg')">

    <div class="display-table">
        <div class="display-table-cell vertical-align-middle">

            <div class="container">

                <div class="row">

                    <div class="col-12 col-sm-5 col-md-5 col-lg-4 order-md-2 order-sm-2 order-lg-2">

                        <!-- ALERT -->
                        <!--
                        <div class="alert alert-mini alert-danger mb-30">
                                <strong>Oh snap!</strong> Login Incorrect!
                        </div>
                        -->
                        <!-- /ALERT -->

                        <!-- login form -->
                        {{ Form::open(array('url' => 'login','class'=>"sky-form boxed")) }}
                        <header><i class="fa fa-users"></i> Sign In</header>

                        <fieldset class="m-0">	

                            <label class="label mt-20">E-mail</label>
                            <label class="input">
                                <i class="ico-append fa fa-envelope"></i>
                                <input name="email" type="email">
                                {{ $errors->first('email') }}
                                <span class="tooltip tooltip-top-right">Email Address</span>
                            </label>

                            <label class="label mt-20">Password</label>
                            <label class="input">
                                <i class="ico-append fa fa-lock"></i>
                                <input name="password" type="password">
                                {{ $errors->first('password') }}
                                <b class="tooltip tooltip-top-right">Type your Password</b>
                            </label>                           

                        </fieldset>

                        <footer class="celarfix">
                            <button type="submit" class="btn btn-primary rad-0 float-right"><i class="fa fa-check"></i> OK, LOG IN</button>

                        </footer>
                        {{ Form::close() }}
                        <!-- /login form -->

                        <div class="socials m-top10 text-center"><!-- more buttons: ui-buttons.html -->
                            <a href="#" class="social-icon social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="social-icon social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon social-google" data-toggle="tooltip" data-placement="top" title="Google">
                                <i class="icon-google-plus"></i>
                                <i class="icon-google-plus"></i>
                            </a>

                        </div>

                    </div>

                    <div class="col-12 col-md-7 col-sm-7 col-lg-8 order-md-1 order-sm-1 order-lg-1">

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>
@endsection