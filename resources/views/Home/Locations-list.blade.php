
@extends('Home.Main')

@section('body')

		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('LP/travelu/images/parallax/bgparallax-06.jpg') }}">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Availability Of Rooms</h1>
							
						
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
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout tg-bglight">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-listing tg-listingvthree">
								<div class="tg-sectiontitle">
									
								</div>
							
								
								@isset($locations)
								@if(count($locations)>0)

								@foreach ($locations as $location)
								<div class="tg-populartour tg-populartourvtwo">
									<figure>
										<a href="{{ url('locations-explore/'.$location->id) }}"><img src="{{ url('LP/travelu/images/tours/img-19.jpg') }}" alt="image destinations"></a>
									</figure>
									<div class="tg-populartourcontent">
										<div class="tg-populartourtitle">
											<h3><a href="{{ url('locations-explore/'.$location->id) }}">{{ $location->title }}</a></h3>
											<br>
											<span> <strong style=" text-transform: uppercase;">	 capasity {{ $location->capasity }}persons || Beds {{ $location->beds }}</strong> </span>
										</div>
										<div class="tg-description">
											<p>
												{{ $location->description }}

											</p>
											
										</div>
										
										<div class="tg-populartourfoot">
											<div class="tg-durationrating">
												
												<span class="tg-stars"><span></span></span>
												<em>(3 Review)</em>
											</div>
											<ul class="tg-likeshare">
												<li class="tg-shareicon">
													<a href="javascript:void(0);"><i class="icon-share-button-outline"></i><span>share</span></a>
													<ul class="tg-share">
														<li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
										<div class="tg-priceavailability">
											<div class="tg-availhead">
											
												{{-- <time datetime="2017-12-12">Availability : Jan 16’ - Dec 16’</time>
												 --}}
												<time datetime="2017-12-12">{{ $location->rate }}</time>
											
											</div>

											<div class="tg-pricearea">
												<span> Starting From</span>
												<h4>RS.{{ $location->rate }}</h4>
												<span>Type</span>
												<h4>{{ $location->type }}</h4>
												<hr>
												
											</div>
											
											<a class="tg-btn" href="tourbookingdetail.html"><span>Explore Tour</span></a>
										</div>
									</div>
								</div>
								@endforeach

								
								
								@else
								<h3><a href="#">Recode Not Found</a></h3>
									
								@endif
									
								@endisset


								@empty($locations)
									
								<div class="tg-populartour tg-populartourvtwo">
									<figure>
										<a href="tourbookingdetail.html"><img src="{{ url('LP/travelu/images/tours/img-19.jpg') }}" alt="image destinations"></a>
									</figure>
									<div class="tg-populartourcontent">
										<div class="tg-populartourtitle">
											<h3><a href="tourbookingdetail.html">City Tours in Europe, Paris</a></h3>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Etiam porta sem malesuada magna mollis euismod.</p>
											<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet...</p>
										</div>
										<div class="tg-populartourfoot">
											<div class="tg-durationrating">
												<span class="tg-tourduration">7 Days</span>
												<span class="tg-stars"><span></span></span>
												<em>(3 Review)</em>
											</div>
											<ul class="tg-likeshare">
												<li class="tg-shareicon">
													<a href="javascript:void(0);"><i class="icon-share-button-outline"></i><span>share</span></a>
													<ul class="tg-share">
														<li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
										<div class="tg-priceavailability">
											<div class="tg-availhead">
												<time datetime="2017-12-12">Availability : Jan 16’ - Dec 16’</time>
											</div>
											<div class="tg-pricearea">
												<span>From</span>
												<h4>$2,500</h4>
											</div>
											<a class="tg-btn" href="tourbookingdetail.html"><span>Explore Tour</span></a>
										</div>
									</div>
								</div>
								@endempty

								

								
								
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		
        @endsection