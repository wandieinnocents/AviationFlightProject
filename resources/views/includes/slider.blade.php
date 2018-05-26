
	<!--HEADER SECTION-->
	<section>
		<div class="book-tab">
			<div class="container">
				<div class="row">
				<div class="caption center-align slid-cap book-tit">
					<!-- <h5 class="light grey-text text-lighten-3">World's leading tour and travels Booking website</h5> -->
					<!-- <h2>CIVIL AVIATION AUTHORITY</h2> -->
				</div>
				<div class="book-tab-inn">
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#home"><i class="fab fa-fly"></i> ARRIVALS</a></li>
					  <li><a data-toggle="tab" href="#menu1">DEPARTURES</a></li>
						<li><a  href="{{ url('/flight') }}"> MORE</a></li>
					  <!-- <li><a data-toggle="tab" href="#menu2">Custom Package</a></li>
					  <li><a data-toggle="tab" href="#menu3">Car Rentals </a></li>
					   <li><a data-toggle="tab" href="#menu4">Flight Booking  </a></li> -->
					</ul>

					<div class="tab-content book-tab-body">
					  <div id="home" class="tab-pane fade in active">
						<div class="book-tab-tit">
							<h3>Check out the arrivals</h3>
							<p>With our platform you should never miss a flight</p>
						</div>
						      <!-- table here for arrivals -->
                  <div class='table-responsive'>
                    <table class='table table-striped table-bordered table-hover table-condensed'>
                      <thead>
                        <tr>
													<th >IMAGE</th>
													<th >AIRLINE</th>
													<th>AIRCRAFT</th>
													<th>DEPARTURE TIME</th>
													<th>ARRIVAL TIME</th>
													<th>ORIGIN</th>
													<th>DESTINATION</th>
													<th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
												<?php
												date_default_timezone_set('Africa/Nairobi');
												?>

                        <!-- loop the data from here -->
												@foreach($data as $dat)

												<!-- CODE TO COMPUTE STATUS  -->


												<!-- END OF CODES TO COMPUTE THE STATUS -->
                        <tr>
													<td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>
													<td>{{ $dat['ident'] }}</td>
							            <td>{{ $dat['aircrafttype'] }}</td>
							            <td>{{  date("M-dS-Y  h:i A",$dat['filed_departuretime']) }}</td>
							            <td>{{ date("M-dS-Y  h:i A", $dat['estimatedarrivaltime']) }}</td>
							            <td>{{ $dat['origin'] }} - {{ $dat['originName'] }} </td>
							            <td>{{ $dat['destination'] }} - {{ $dat['destinationName'] }} </td>

                        </tr>
												@endforeach

												<!-- end of data iteration -->
                      </tbody>
                    </table>
                  </div>
                  <!-- end of table for arrrivalss -->
					  </div>
					  <div id="menu1" class="tab-pane fade">
						<div class="book-tab-tit">
              <h3>Check out the departures</h3>
							<p>With our platform you should never miss a flight</p>
						</div>
            <!-- table here for arrivals -->
            <div class='table-responsive'>
              <table class='table table-striped table-bordered table-hover table-condensed'>
                <thead>
                  <tr>
										<th >IMAGE</th>
										<th >AIRLINE</th>
										<th>AIRCRAFT</th>
										<th>DEPARTURE TIME</th>
										<th>ARRIVAL TIME</th>
										<th>ORIGIN</th>
										<th>DESTINATION</th>
                  </tr>
                </thead>
                <tbody>
									@foreach($data_departures as $dat)
                  <tr>

										<td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>
										<td>{{ $dat['ident'] }}</td>
										<td>{{ $dat['aircrafttype'] }}</td>
										<td>{{  date("M-dS-Y  h:i A",$dat['filed_departuretime']) }}</td>
										<td>{{ date("M-dS-Y  h:i A", $dat['estimatedarrivaltime']) }}</td>
										<td>{{ $dat['origin'] }} - {{ $dat['originName'] }} </td>
										<td>{{ $dat['destination'] }} - {{ $dat['destinationName'] }} </td>
                  </tr>
									@endforeach


                </tbody>
              </table>
            </div>
            <!-- end of table for arrrivalss -->
					  </div>
















					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->




<!-- <section>
  <div>
    <div>
      <div>
    <div class="slider fullscreen">
      <ul class="slides">
        <li> <img src="assets/images/content/flight1.jpg" alt="">

          <div class="caption center-align slid-cap">
            <h5 class="light grey-text text-lighten-3">Travel the world.</h5>
            <h2>CIVIL AVIATION AUTHORITY</h2>
            <p>Let us travel the world together, and happy.</p> </a><a href="{{ url('/flight') }}">FLIGHTS AVAILABLE</a> </div>
        </li>
        <li> <img src="assets/images/content/lake.jpg" alt="">

          <div class="caption center-align slid-cap">
            <h5 class="light grey-text text-lighten-3">Accomodation besides you.</h5>
            <h2>FEEL CONFORTABLE</h2>
            <p>We have all the good facilities to accomodate you while you wait to fly.</p> <a href="{{ url('/accomodation') }}" class="waves-effect waves-light">ACCOMODATION</a> </div>
        </li>
        <li> <img src="assets/images/content/car1.jpg" alt="">

          <div class="caption center-align slid-cap">
            <h5 class="light grey-text text-lighten-3">Transport is all covered.</h5>
            <h2>BOOK THE BEST TRANSPORT</h2>
            <p>We have a collection of different transport means around the airport that can transport you.</p> <a href="{{ url('/transport') }}" class="waves-effect waves-light">TRANSPORTATION</a></div>
        </li>

      </ul>
    </div>
      </div>
    </div>
  </div>
</section> -->
