
@extends('Home.Main')

@section('body')

		<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('LP/travelu/images/parallax/bgparallax-06.jpg') }}">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					@isset($location)
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-tourbookingdetail">
								<div class="tg-bookinginfo">
									<h2>{{ $location->title }}</h2>
									<div class="tg-durationrating">
										<span class="tg-stars"><span></span></span>
										<em>(3 Review)</em>
									</div>
									<div class="tg-pricearea">
										<strong>Base Rate</strong>
										
										<h4>PKR {{ $location->rate }}<sub>/ per Day</sub></h4>
									</div>
									<div class="tg-description">
										<strong>{{ $location->address }}.</strong>
									</div>

									@if (  Auth::User()  )

									<form class="tg-formtheme tg-formbookingdetail"  method="post" action={{ url('/addreservation') }}>
										
										@else
											
										<form class="tg-formtheme tg-formbookingdetail"  method="get" action={{ url('/login') }}>
									@endif

											@csrf
										<fieldset>
											<div class="form-group">
												<div class="tg-formicon"><span>IN</span></div>
												<span class="tg-select">
													<input class="selectpicker" required name="check_in" type="date" data-live-search="true" data-width="100%">
													
													
												</span>
											</div>

											



											<div class="form-group">	
												<div class="tg-formicon"><span>OUT</span>	</div>
												
												<span class="tg-select">

													<input class="selectpicker" required name="check_out" type="date" data-live-search="true" data-width="100%">
													
													
												</span>
											</div>

											<input type="hidden"  name="location_id" value=" {{$location->id }}">


											
											<div class="form-group">
												<button type="submit" class="tg-btn tg-btn-lg"><span>proceed boking</span></button>
											</div>

											
											
										
										
										
										
										
										</fieldset>
									</form>
									<ul class="tg-tripinfo">
										{{-- <li><span class="tg-tourduration">12 Days 11 Nights</span></li> --}}
										<li><span class="tg-tourduration tg-availabilty">{{ $location->pin }}</span></li>
										<li><span class="tg-tourduration tg-location">{{ $location->city }}</span></li>
										<li><span class="tg-tourduration tg-peoples">{{ $location->capasity }} Persons</span></li>
									</ul>
									<div class="tg-refundshare">
										<div class="tg-refund">
											<figure><img src="{{ url('LP/travelu/images/img-03.jpg') }}" alt="image description"></figure>
											<div class="tg-refundinfo">
												<h3>100% refundable</h3>
												<div class="tg-description">
													<p>Cancel up to 24 Hour After Booking your trip and get a full refund.</p>
												</div>
											</div>
										</div>
										<ul class="tg-likeshare">
											<li class="tg-shareicon">
												<a href="javascript:void(0);"><i class="icon-share-button-outline"></i>share</a>
												<ul class="tg-share">
													<li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"><i class="icon-heart"></i>save to wish list</a></li>
											<li><a href="javascript:void(0);"><i class="icon-eye"></i>3520</a></li>
										</ul>
									</div>
								</div>
								<div class="tg-sectionspace tg-haslayout">
									<div class="tg-themetabs tg-bookingtabs">
										<ul class="tg-themetabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#america" aria-controls="america" role="tab" data-toggle="tab">
													<span>Overview</span>
												</a>
											</li>

											
											<li role="presentation">
												<a href="#meal" aria-controls="meal" role="meal" data-toggle="tab">
													<span>Meal</span>
												</a>
											</li>
										

											

											
											<li role="presentation">
												<a href="#vehicel" aria-controls="vehicel" role="vehicel" data-toggle="tab">
													<span>vehicel</span>
												</a>
											</li>
											

											<li role="presentation">
												<a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">
													<span>FAQ's</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">
													<span>location</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#london" aria-controls="london" role="tab" data-toggle="tab">
													<span>Reviews</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#india" aria-controls="india" role="tab" data-toggle="tab">
													<span>Gallery</span>
												</a>
											</li>

											

										</ul>
										<div class="tab-content tg-themetabcontent">
											<div role="tabpanel" class="tab-pane active tg-overviewtab" id="america">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<h2>About Location</h2>
														<div class="tg-description">
															<p>Description
																</p>
															<p>
																{{ $location->description }}

															</p>
															
															
														</div>
													</div>
													<div class="tg-box">
														<h2>Terms & Condations</h2>
														<div class="tg-description">
															<p>{{ $location->policy }}</p>
														</div>
													</div>
												</div>
												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-amentities">
														<h3>Amenities</h3>
														<div class="tg-content">
															<ul class="tg-liststyle">
																<li><span>Pets allowed</span></li>
																<li><span>Internet</span></li>
																<li><span>Gym</span></li>
																<li><span>Hot tub</span></li>
																<li><span>Doorman</span></li>
																<li><span>Wheelchair accessible</span></li>
																<li><span>Pool</span></li>
															</ul>
															<ul class="tg-liststyle">
																<li><span>Kitchen</span></li>
																<li><span>Suitable for events</span></li>
																<li><span>Dryer</span></li>
																<li><span>Family/kid friendly</span></li>
																<li><span>Cable TV</span></li>
																<li><span>Wireless Internet</span></li>
															</ul>
														</div>
													</div>
												</div>

												

												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-priceinclude">
														<h3>Price Includes</h3>
														<div class="tg-content">
															<ul class="tg-liststyle">
																<li><span>Air fares</span></li>
																<li><span>3 Nights Hotel Accomodation</span></li>
																<li><span>Tour Guide</span></li>
																<li><span>Entrance Fees</span></li>
																<li><span>All transportation in destination location</span></li>
															</ul>
														</div>
													</div>
												</div>
												{{-- <div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-amentities">
														<h3>Tour Rules</h3>
														<div class="tg-content">
															<div class="tg-description">
																<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent.</p>
															</div>
														</div>
													</div>
												</div> --}}
											</div>

											@isset($vehicle)
											<div role="vehicel" class="tab-pane  tg-overviewtab" id="vehicel">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<h2>vehicle</h2>
														

															
																	<ul >
																		<hr>
																		<li class="active"><span >Name  <strong style="float: right">{{ $vehicle->Name }}</strong>  </span></li>
																		<hr>
																		<li class="active"><span>Model  <strong style="float: right">{{ $vehicle->Model }}</strong> </span></li>
																		<hr>
																		<li class="active"><span>Type   <strong style="float: right">{{ $vehicle->Type }}</strong>  </span></li>
																		<hr>
																		<li class="active"><span>fair   <strong style="float: right">{{ $vehicle->fair }}</strong> </span></li>
																	</ul>
															
															
															
																
																
															
															
													
													</div>
													<div class="tg-box">
														<h2>Terms & Condations</h2>
														<div class="tg-description">
															<p>{{ $vehicle->terms }}</p>
														</div>
													</div>
												</div>
										
											</div>
											@endisset

											@empty($vehicle)
											<div role="vehicel" class="tab-pane  tg-overviewtab" id="vehicel">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<h2>Not Available</h2>
														
													</div>
													
												</div>
										
											</div>
											@endempty

											
											@isset($meal)
											<div role="meal" class="tab-pane tg-reviewtab" id="meal">
												
												
												
												
												<div class="tg-reviewsarea">
													
														
														<fieldset class="tg-reviews">
															<ul>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			
																			<div class="tg-authorinfo">
																				<span>BreakFast</span>
																				<span>Morning</span>
																				
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																		
																			<div class="tg-description">
																				<h3 class="active">{{ $meal->breakfast }}</h3 class="active">
																			</div>
																		</div>
																	</div>
																</li>

																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			
																			<div class="tg-authorinfo">
																				<span>Lunch   </span>
																				<span>Evening   </span>
																				
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																		
																			<div class="tg-description">
																				<h3 class="active">{{ $meal->lunch }}</h3 class="active">
																			</div>
																		</div>
																	</div>
																</li>

																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			
																			<div class="tg-authorinfo">
																				<span >Dinner  </span>
																				<span>Night  </span>
																				
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																		
																			<div class="tg-description">
																				<h3 >{{ $meal->dinner	 }}</h3 class="active">
																			</div>
																		</div>
																	</div>
																</li>
															
															</ul>
														</fieldset>
														
													
												</div>
											</div>
											@endisset

											@empty($meal)
												
										
											<div role="meal" class="tab-pane tg-reviewtab" id="meal">
												<div class="tg-reviewsarea">
													
														
													<div class="tg-box">
														<h2>Not Available</h2>
														
													</div>
														
													
												</div>
											</div>
											@endempty

											<div role="tabpanel" class="tab-pane tg-itinerary" id="australia">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<div class="tg-accordion" role="tablist" aria-multiselectable="true">
															<div class="tg-panel">
																<h4>Question 1<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
																	</div>
																</div>
															</div>
															<div class="tg-panel">
																<h4>Question 2<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
																	</div>
																</div>
															</div>
															<div class="tg-panel">
																<h4>Question 3<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
															<div class="tg-panel">
																<h4>question 4<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
																	</div>
																</div>
															</div>
															<div class="tg-panel">
																<h4>Question 5<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
																<div class="tg-panelcontent">
																	<div class="tg-description">
																		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
																	</div>
																</div>
															</div>
														
														</div>
													</div>
												</div>
											</div>

											<div role="tabpanel" class="tab-pane tg-locationtab" id="italy">
												<div class="tg-box tg-location">
													<h3>The neighborhood</h3>
													<div class="tg-description">
														<p>Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
															euismod.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div id="tg-locationmap" class="tg-locationmap tg-map"></div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane tg-reviewtab" id="london">
												<div class="tg-reviewsarea">
													<form class="tg-formtheme tg-formreviews">
														<fieldset class="tg-filterby">
															<div class="tg-durationrating">
																<em>(3 Review)</em>
																<span class="tg-stars"><span></span></span>
															</div>
															<span class="tg-select">
																<select>
																	<option>Filter by</option>
																	<option>Rating</option>
																	<option>New</option>
																	<option>date</option>
																</select>
															</span>
														</fieldset>
														<fieldset class="tg-reviews">
															<ul>
																<li>
																	<div class="tg-review">
																		<div class="tg-author">
																			<figure class="tg-authorimg">
																				<img src="images/avatars/img-01.jpg" alt="image description">
																			</figure>
																			<div class="tg-authorinfo">
																				<h3>Katie</h3>
																				<span>Family Vacation</span>
																				<span class="tg-stars"><span></span></span>
																			</div>
																		</div>
																		<div class="tg-reviewcontent">
																			<div class="tg-reviewhead">
																				<span class="tg-tourduration">January 25, 2017</span>
																				<a class="tg-btnhelpfull" href="#"><i class="icon-thumb-up"></i>Helpful</a>
																			</div>
																			<div class="tg-description">
																				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
																			</div>
																		</div>
																	</div>
																</li>
																
															</ul>
														</fieldset>
														
													</form>
												</div>
											</div>


											

											<div role="tabpanel" class="tab-pane tg-gallerytab" id="india">
												<div class="tg-gallery">
													<ul>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-01.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-01.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-02.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-02.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-03.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-03.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-04.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-04.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-05.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-05.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-06.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-06.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-07.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-07.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-08.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-08.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
														<li>
															<figure>
																<a href="{{ url('LP/travelu/images/gallery/img-09.jpg') }}" data-rel="prettyPhoto[instagram]">
																	<img src="{{ url('LP/travelu/images/gallery/img-09.jpg') }}" alt="image decruoton">
																</a>
															</figure>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endisset
				

					@empty($location)
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h2>Nothing Found</h2>
					</div>
					@endempty
				
				
				</div>
			</div>
			<!--************************************
					Article Start
			*************************************-->
			
			<!--************************************
					Article End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
        @endsection