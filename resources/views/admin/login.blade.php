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
									<form action="index.html" method="post" class="sky-form boxed">
										<header><i class="fa fa-users"></i> Sign In</header>
										
										<fieldset class="m-0">	
										
											<label class="label mt-20">E-mail</label>
											<label class="input">
												<i class="ico-append fa fa-envelope"></i>
												<input type="email">
												<span class="tooltip tooltip-top-right">Email Address</span>
											</label>
										
											<label class="label mt-20">Password</label>
											<label class="input">
												<i class="ico-append fa fa-lock"></i>
												<input type="password">
												<b class="tooltip tooltip-top-right">Type your Password</b>
											</label>
											<label class="checkbox mt-20">
												<input type="checkbox" name="checkbox-inline">
												<i></i> Keep me logged in
												</label>

										</fieldset>

										<footer class="celarfix">
											<button type="submit" class="btn btn-primary rad-0 float-right"><i class="fa fa-check"></i> OK, LOG IN</button>
											<div class="login-forgot-password float-left">
												<a href="page-password.html">Forgot password?</a>
											</div>
										</footer>
									</form>
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


									<h2 class="fs-20 text-center-xs">¿Por qué contratarme?</h2>

									<p>Me considero una persona que puede trabajar en equipo, da lo mejor de si en cada proyecto. Tengo 5 años de experiencia de los cuales 3 han sido en el ambito de desarrollo de ERP para el sector automotriz. He participado en proyectos de nómina, control de producción, finanzas, administración de almacenes todo en ERP's desarrollados en .NET. He participado en proyectos de control de movimientos en piso de producción y conectividad con PLC. He desarrollado aplicaciones hibridas distriubidas en IOS y Android.</p>

									<ul class="list-unstyled login-features">
										<li>
											<i class="glyphicon glyphicon-road"></i> <strong> Adaptabilidad. Respeto. </strong> 
										</li>
										<li>
											<i class="glyphicon glyphicon-cog"></i> <strong>Honestidad, Paciencia.</strong>
										</li>
										<li>
											<i class="glyphicon glyphicon-tint"></i> <strong> Gusto por participar en proyectos desafiantes. </strong> 
										</li>
										<li>
											<i class="glyphicon glyphicon-screenshot"></i> <strong>Trabajo en equipo</strong> 
										</li>
										<li>
											<i class="glyphicon glyphicon-fire"></i> <strong>Pasión por mi trabajo</strong>
										</li>
									</ul>

								</div>

							</div>

						</div>

					</div>
				</div>

			</section>
@endsection