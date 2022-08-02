@extends('Home.Main')

@section('body')
		
		
		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('LP/travelu/images/parallax/bgparallax-05.jpg') }}">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Contact Us</h1>
							<h2>Contact With Stay-With-Us Team for More Details.</h2>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Home</a></li>
								<li class="tg-active">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<ul class="tg-contactinfo">
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-commenting-o"></i></span>
									<h2>Get in Touch</h2>
									<span>Telephone: +92 300 123 4564</span>
									<span>Mobile: +92 300 123 4564</span>
									<strong><a href="#">info@swu.com</a></strong>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-map-marker"></i></span>
									<h2>Visit Our Location</h2>
									<address>F8 Blue Area Islamabad ,Pakistan</address>
									<strong><a href="javascript:void(0);">Get Directions</a></strong>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-briefcase"></i></span>
									<h2>Looking for a career?</h2>
									<div class="tg-description"><p>Join us For Batter World.</p></div>
									<strong><a href="">careers@swu.com</a></strong>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
        @endsection