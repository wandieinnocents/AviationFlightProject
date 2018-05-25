@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')
<section>
<div class="rows inner_banner iner_banner_2">
  <div class="container">
    <h2><span>Arrivals </span> </h2>
    <ul>
      <li><a href="{{ url('/') }}">Home</a>
      </li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
      <li><a href="{{ url('/arrivals') }}" class="bread-acti">Flights</a>
      </li>
    </ul>
    <p>Check out your flights</p>
  </div>
</div>
</section>
<!--====== ABOUT CONTENT ==========-->
<section class="tourb2-ab-p-2 com-colo-abou">
<div class="container">
  <div class="spe-title">
    <h2>KNOW MORE <span>ABOUT</span>FLIGHT ARRIVALS</h2>
    <div class="title-line">
      <div class="tl-1"></div>
      <div class="tl-2"></div>
      <div class="tl-3"></div>
    </div>
    <p>Never miss a flight, we have you covered! </p>
  </div>
  <div class="row">



    <div class="col-md-12">



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
        <?php


        ?>

          @foreach($data as $dat)

        <tbody>
          <tr>


            <td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>

            <td>{{ $dat['ident'] }}</td>
            <td>{{ $dat['aircrafttype'] }}</td>
            <td>{{  date("r",$dat['filed_departuretime']) }}</td>
            <td>{{ date("m/d/y h:i:s a", $dat['estimatedarrivaltime']) }}</td>
            <td>{{ $dat['origin'] }} - {{ $dat['originName'] }} </td>
            <td>{{ $dat['destination'] }} - {{ $dat['destinationName'] }} </td>


          </tr>
        </tbody>


        @endforeach

      </table>



    </div>



  </div>

</div>
</section>


@endsection
