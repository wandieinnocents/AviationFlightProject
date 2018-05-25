@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')

<!--HEADER SECTION-->

<section>


  <div class="book-tab">
    <div class="container">
      <div class="row">

      <!-- section for search area -->

      <div style="background-color: #ffffff; margin-bottom: 20px;">





      <div class="row">
      <div class="col-md-1 ">

      </div>

      <div class="col-md-10">
         <div style="margin-left: 100px;">
        <ul class="nav nav-pills">
        <li class="active">
          <a data-toggle="tab"
           href="#home">
           <i class="fab fa-fly"></i>
           <span style="color:black;">ARRIVALS</span>
          </a>
        </li>
          <li>
          <input type="text" id="myInput"
           onkeyup="myFunction()" placeholder="Search for Arrivals"
           title="Type in a name">
          </li>

        <li>
          <a data-toggle="tab" href="#menu1">

          <span style="color:black;">DEPARTURES</span>
          </a>
         </li>
          <li>
          <input type="text" id="myInput1"
          onkeyup="myFunction1()" placeholder="Search for Departuers"
          title="Type in a name">
          </li>

        </ul>
      </div>
      </div>

      <div class="col-md-1">

      </div>



      </div>

      <div class="row">

      <div class="col-md-3">

      </div>

      <div class="col-md-6 text-center">

      <span style="font-size: 20px;">

        <?php

      //php for current time zone
      date_default_timezone_set('Africa/Nairobi');
      $today = date("l jS \of F Y h:i:s A");
      echo $today;


      ?>
      </span>

      </div>

      <div class="col-md-3">

      </div>

      </div>

      </div>

      <!-- end of search area section -->

      <div class="caption center-align slid-cap book-tit">
        <!-- <h5 class="light grey-text text-lighten-3">World's leading tour and travels Booking website</h5> -->

      </div>


      <div class="book-tab-innn">



        <div class="tab-content book-tab-body">
          <div id="home" class="tab-pane fade in active">
          <div class="book-tab-tit">
            <h3>Check out the arrivals</h3>
            <p>With our platform you should never miss a flight</p>
          </div>
                <!-- table here for arrivals -->
                <div class='table-responsive'>
                  <table id="myTable" class='table table-striped table-bordered table-hover table-condensed'>
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



                    <?php


                    $status_info=$controller->status(str_limit($dat['ident'], $limit = 3, $end = ''));

                    $status_info=$status_info[0];

                    $status="";

                    if($status_info->actualdeparturetime==-1)
                    {
                      $status="Cancelled";

                    }


                      else if($status_info->actualarrivaltime>0){

                      $status="Arrived";

                    }
                     else if($status_info->actualdeparturetime>0){

                      $status="Departed";
                    }

                    //variables for date addition

                    else if(date("m-d-Y h:i:s",$status_info->estimatedarrivaltime) >

                      (
                        // $status_info->filed_departuretime 

                       // date("m-d-Y h:i:s",$status_info->filed_departuretime)


                          \Carbon\Carbon::createFromFormat('H:i:s', $status_info->filed_ete)->addMinutes(15)



                          )){


                      $status="Delayed";

                    }

                    else{
                      $status = "Scheduled";
                    }

                    // dd(\Carbon\Carbon::createFromFormat('m/d/Y H:i:s', $status_info->filed_departuretime));

                     ?>
                      <tr>
                        <td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>
                        <td>{{ $dat['ident'] }}</td>
                        <td>{{ $dat['aircrafttype'] }}</td>
                        <td>{{  date("M-dS-Y  h:i A",$dat['filed_departuretime']) }}</td>
                        <td>{{ date("M-dS-Y  h:i A", $dat['estimatedarrivaltime']) }}</td>
                        <td>{{ $dat['origin'] }} - {{ $dat['originName'] }} </td>
                        <td>{{ $dat['destination'] }} - {{ $dat['destinationName'] }} </td>

                        <td>

                        {{$status}}

                         </td>
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
            <table  id="myTable1" class='table table-striped table-bordered table-hover table-condensed'>
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
                @foreach($data_departures as $dat)

                <?php
                $status = "pending";

                ?>

                <tr>

                  <td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>
                  <td>{{ $dat['ident'] }}</td>
                  <td>{{ $dat['aircrafttype'] }}</td>
                  <td>{{  date("M-dS-Y  h:i A",$dat['filed_departuretime']) }}</td>
                  <td>{{ date("M-dS-Y  h:i A", $dat['estimatedarrivaltime']) }}</td>
                  <td>{{ $dat['origin'] }} - {{ $dat['originName'] }} </td>
                  <td>{{ $dat['destination'] }} - {{ $dat['destinationName'] }} </td>
                  {{-- <td>{{$status}} </td> --}}
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

@endsection


@section('after_scripts')

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// table two departuers scripts
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@endsection
