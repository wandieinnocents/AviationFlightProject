@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')


<!-- slider here -->

	@include('includes.slider')

<!-- end of slider -->
<section >
		<div class="rows pad-bot-redu tb-space hom2-ban-pack" >
			<div class="container" >
				<div>
					<!-- TOUR PLACE 1 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.5s">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="" alt=""> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="assets/images/content/homesections/home_flight.JPG" alt="Tour Booking" title="Tour Booking"> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="{{ url('/flight') }}">FLIGHTS<span class="v_pl_name"></span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="{{ url('/flight') }}"><img src="assets/images/clock.png" alt="Date" title="Tour Timing"> </a>
									</li>


								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 2 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1s">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="" alt=""> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="assets/images/content/homesections/home_accomodation.JPG" alt="Tour Booking" title="Tour Booking"> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="{{ url('/hotel') }}">HOTELS<span class="v_pl_name"></span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="{{ url('/accomodation') }}"><img src="assets/images/clock.png" alt="Date" title="Tour Timing"> </a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 3 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
						<div class="v_place_img"><img src="assets/images/content/homesections/home_transport.JPG" alt="Tour Booking" title="Tour Booking"> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="{{ url('/transport') }}">TRANSPORT<span class="v_pl_name"></span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>


									<li>
										<a href="{{ url('/transport') }}"><img src="assets/images/map.png" alt="Location" title="Location"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="rows tb-space pad-bot-redu">
			<div class="container">

				<div class="spe-title">
					<h2>What you can <span> Explore</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>At The Airport we have a variety of services that you can access to make you confortable</p>
				</div>
				<!-- CITY -->
				<div class="col-md-6">
					<a href="{{ url('/hotel') }}">


						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="assets/images/content/explore/explore_hote.JPG" alt=""> </div>
							<div class="tour-mig-lc-con">
								<h5>Hotels</h5>
								<p><span>Affordable for you!</span> Click to view more</p>
							</div>
						</div>



					</a>
				</div>
				<div class="col-md-3">
					<a href="{{ url('/shop') }}">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="assets/images/content/explore/explore_shop.JPG" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Shops</h5>
								<p>Buy anything!</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{ url('/transport') }}">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="assets/images/content/explore/explore_transport.JPG" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Transport</h5>
								<p>Safely Travel</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{ url('/parking') }}">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="assets/images/content/explore/explore_parking.JPG" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Parking</h5>
								<p>Security Available</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{ url('/inspiration') }}">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="assets/images/content/explore/explore_inspiration.JPG" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Inspiration</h5>
								<p>Be inspired as you wait!</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>



	<!-- <section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">

				<div class="spe-title">
					<h2>Hotel <span>booking open now! </span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>Take a look at our cooperate hotels and book for your place one to make yourself confortable.</p>
				</div>

				<div class="to-ho-hotel">

					@foreach($hotels as $hotel)
					<div class="col-md-4">

						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="assets/images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Hotels: {{ $hotel->count() }} </div> <img src="assets/images/hotels/1.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>{{ $hotel->name }}</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>{{ $hotel->description }}
											<div class="dir-rat-star ho-hot-rat-star"> {{ $hotel->location }} <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis"></span><span class="ho-hot-pri"><span style="font-size: 100;">{{ $hotel->contact  }}</span></span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					@endforeach



				</div>
			</div>
		</div>
	</section> -->

	<!--====== REQUEST A QUOTE ==========-->
	<section>
		<div class="foot-mob-sec tb-space">
			<div class="rows container">
				<!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
				<div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="assets/images/content/mobile-app-footer.png" alt="" /> </div>
				<!-- REQUEST A QUOTE -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- THANK YOU MESSAGE -->
					<div class="foot-mob-app">
						<h2>Have you downloaded our app??</h2>
						<p>With pleasure, you can also check out our mobile application on google play and apple store.</p>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i> View flights timetable</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Different Accomodation</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Transport Means available</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Shops around the airport</li>
						</ul>
						<a href="assets/downloads/EasyFlight.apk"><img src="assets/images/android.png" alt=""> </a>
						<a href="#"><img src="assets/images/apple.png" alt=""> </a>
					</div>
				</div>
			</div>
		</div>
	</section>




@endsection
