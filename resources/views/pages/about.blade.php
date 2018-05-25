@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')



<section>
<div class="rows inner_banner iner_banner_2">
  <div class="container">
    <h2><span>About us </span> </h2>
    <ul>
      <li><a href="{{ url('/') }}">Home</a>
      </li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
      <li><a href="{{ url('/about') }}" class="bread-acti">About Us</a>
      </li>
    </ul>
    <p>About Civil aviation authority Flights</p>
  </div>
</div>
</section>
<!--====== ABOUT CONTENT ==========-->
<section class="tourb2-ab-p-2 com-colo-abou">
<div class="container">
  <!-- TITLE & DESCRIPTION -->
  <div class="spe-title">
    <h2>KNOW MORE <span>ABOUT</span>CIVIL AVIATION</h2>
    <div class="title-line">
      <div class="tl-1"></div>
      <div class="tl-2"></div>
      <div class="tl-3"></div>
    </div>
  <center>  <p>Bringing the world closer to you! </p></center>
  </div>
  <div class="row tourb2-ab-p1">
    <div class="col-md-6 col-sm-6">
      <div class="tourb2-ab-p1-left">
        <h3>Hi! Welcome to Civil aviation Authority</h3>
        <br>
        <hr>
        <p>The Civil Aviation Authority of Uganda (CAA) is the government agency responsible for licensing, monitoring, and regulating
          civil aviation matters. It is administered by the Uganda Ministry of Works and Transport</p>
          <p>The authority's head offices are at Entebbe International Airport, approximately 40 kilometres (25 mi), by road, south of Kampala, the capital and largest city of Uganda.[4] The coordinates of the CAA headquarters are 0°02'23.0"N,
             32°26'53.0"E (Latitude:0.039722; Longitude:32.448056)</p>
             <p>The chairman of the board of directors is Edward Mike Ndawula.[1] The acting chief executive officer and managing director is David Mpango.</p>
        </div>
      </div>
    <div class="col-md-6 col-sm-6">
      <div class="tourb2-ab-p1-right"> <img src="assets/images/content/3.jpeg" alt="" /> </div>
    </div>
  </div>
</div>
</section>

@endsection
