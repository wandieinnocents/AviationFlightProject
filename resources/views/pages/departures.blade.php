@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')



<section>
<div class="rows inner_banner iner_banner_2">
  <div class="container">
    <h2><span>Departure </span> </h2>
    <ul>
      <li><a href="{{ url('/') }}">Home</a>
      </li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
      <li><a href="{{ url('/departures') }}" class="bread-acti">Departure</a>
      </li>
    </ul>
    <p>Check out your flights</p>
  </div>
</div
</section>
<!--====== ABOUT CONTENT ==========-->
<section class="tourb2-ab-p-2 com-colo-abou">
<div class="container">
  <div class="spe-title">
    <h2>KNOW MORE <span>ABOUT</span>FLIGHT DEPARTURE</h2>
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

            <th>IDENTITY</th>
            <th>AIRCRAFT</th>
            <th>DEPARTURE TIME</th>
            <th>ARRIVAL TIME</th>
            <th>FILED DEPARTURE TIME</th>
            <th>ORIGIN</th>
            <th>DESTINATION</th>
            <th>ORIGIN NAME</th>
            <th>ORIGIN CITY</th>
            <th>DESTINATION NAME</th>
            <th>DESTINATION CITY</th>
            
          </tr>
        </thead>
          @foreach($data as $dat)
        <tbody>
          <tr>
            <td>{{ $dat['ident'] }}</td>
            <td>{{ $dat['aircrafttype'] }}</td>
            <td>{{ $dat['filed_departuretime'] }}</td>
            <td>{{ $dat['estimatedarrivaltime'] }}</td>
            <td>{{ $dat['filed_departuretime'] }}</td>
            <td>{{ $dat['origin'] }}</td>
            <td>{{ $dat['destination'] }}</td>
            <td>{{ $dat['originName'] }}</td>
            <td>{{ $dat['originCity'] }}</td>
            <td>{{ $dat['destinationName'] }}</td>
            <td>{{ $dat['destinationCity'] }}</td>





          </tr>
        </tbody>
        @endforeach

      </table>



    </div>



  </div>

</div>
</section>


@endsection
