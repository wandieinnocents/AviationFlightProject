<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="#">
                    <img src="asset('assets/images/content/flight.PNG')" alt=""/>

                    <!-- <img src="assets/images/content/logoflight.png" alt=""/> -->

        </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>


                        <ul>
                           <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/flight') }}">Flight</a></li>

                            <li><a href="{{ url('/accomodation') }}">Accomodation</a></li>
                            <li><a href="{{ url('/parking') }}">Parking</a></li>
                            <li><a href="{{ url('/transport') }}">Transport</a></li>
                            <li><a href="{{ url('/hotel') }}">Hotels</a></li>
                            <li><a href="{{ url('/shop') }}">Shop</a></li>
                            <li><a href="{{ url('/inspiration') }}">Inspiration</a></li>

                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->

<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: Easy Flight</a>
                            </li>
                            <hr>

                            <li><a href="#"><span style="margin-bottom: 20px">Phone: +256 785856863</span></a>

                            <li >
                              <?php

                              //units=For temperature in Celsius use units=metric
                              //5128638 is new york ID
                              date_default_timezone_set('Africa/Nairobi');
                              $url = "http://api.openweathermap.org/data/2.5/weather?q=kampala&APPID=cee095b1cc03be80e981687ef8c0c00b";


                              $contents = file_get_contents($url);
                              $clima=json_decode($contents);

                              $temp_max=$clima->main->temp_max;
                              $temp_min=$clima->main->temp_min;
                              $icon=$clima->weather[0]->icon.".png";
                              //how get today date time PHP :P

                              $today = date("F j, Y, g:i a");
                              $cityname = $clima->name;

                              echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";
                              echo $cityname . " - " .$today . "-";
                               echo "Max: " . $temp_max ."&deg;C" . "-";
                               echo "Min: " . $temp_min ."&deg;C";



                              ?>


                            </li>














                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            <li><a href="#">Facebook</a>
                            </li>
                            <li><a href="#">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="main.html">
                          <img src="assets/images/content/flight.PNG" alt="">
                          <!-- <p>CIVIL AVIATION</p> -->

                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a>
                            </li>


                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/flight') }}">Flights</a></li>
                            <!-- <li><a href="{{ url('/flight') }}">Flights</a></li> -->
                            <!-- drop down -->



                          <!-- end of drop down  -->
                            <!-- <li><a href="{{ url('/accomodation') }}">Accomdation</a></li> -->
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->

                            <li><a href="{{ url('/parking') }}">Parking</a>
                            </li>
                            <li><a href="{{ url('/transport') }}">Transport</a>
                            </li>
                            <li><a href="{{ url('/hotel') }}">Hotels</a>
                            </li>
                           
                           

                            <!-- drop down here -->
                              <li class="admi-menu">
                                    <a href="#" class="mm-arr">Explore</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    
                                                    <p><a href="{{ url('/forexbureau') }}">Forex Bureaus</a></p>
                                                    
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    
                                                     <p><a href="{{ url('/tour') }}">Tours</a></p>
                                                    
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    
                                                    <p><a href="{{ url('/embasy') }}">Embasies</a></p>
                                                    
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    
                                                     <p><a href="{{ url('/hospital') }}">Hospital</a></p>
                                                    
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </li>
                              <!-- end of drop down -->


                            <li><a href="{{ url('/shop') }}">Shop</a>
                            </li>
                            <li><a href="{{ url('/inspiration') }}">Inspiration</a>
                            </li>


                            <li><a href="{{ url('/contact') }}">Contact Us</a>
                            </li>
                            

                              

                        </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>


    

<!-- TOP SEARCH BOX -->
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">



                  
                  


                
                  <div class="search-form">
                  <form  action="/searchhotel" method="get" class="tourz-search-form">
                    <div class="input-field">
                      <!-- <input type="text" id="select-city" class="autocomplete">
                      <label for="select-city">Enter city</label> -->
                    </div>
                    <div class="input-field">
                      <input type="text" id="select-search" name="search" class="autocomplete">
                      <label for="select-search" class="search-hotel-type">Search  hotels at airport!</label>
                    </div>
                    <div class="input-field">
                      <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                  </form>
            </div>

                      <!-- test search form -->
                      <!-- <form action="/flightsearch" method="get">

                        {{ csrf_field() }}
                        <div class="input-group">
                          <input type="text" class="form-control" name="search" placeholder="search flights here!">
                          <span class="input-group-btn">

                            <button type="submit" class="btn btn-default">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>

                          </span>
                        </div>
                      </form> -->

                  <!-- end of test search form -->
  <img src="assets/images/android.png" alt="" 
  style="width:10%;height: 120%; "> </a>
  <img src="assets/images/apple.png" style="width:10%;height: 120%; " alt="">
        </div>

        <!-- icons here -->


        <!-- end of icons here -->
            </div>
        </div>
    </div>
<!-- END TOP SEARCH BOX -->
</section>
<!--END HEADER SECTION-->


<!--HEADER SECTION-->
