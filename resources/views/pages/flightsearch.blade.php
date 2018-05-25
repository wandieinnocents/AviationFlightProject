



@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')



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
      <?php
      date_default_timezone_set('Africa/Nairobi');
      ?>

      <!-- loop the data from here -->
      @foreach($datas as $data)

      <tr>
        <td><img src="{{get_icon_url(str_limit($dat['ident'], $limit = 3, $end = ''))}}" style="width: 100px;height:60px;"></td>
        <td>{{ $data['ident'] }}</td>
        <td>{{ $data['aircrafttype'] }}</td>
        <td>{{  date("M-dS-Y  h:i A",$data['filed_departuretime']) }}</td>
        <td>{{ date("M-dS-Y  h:i A", $data['estimatedarrivaltime']) }}</td>
        <td>{{ $dat['origin'] }} - {{ $data['originName'] }} </td>
        <td>{{ $data['destination'] }} - {{ $data['destinationName'] }} </td>
      </tr>
      @endforeach

      <!-- end of data iteration -->
    </tbody>
  </table>
</div>

@endsection
