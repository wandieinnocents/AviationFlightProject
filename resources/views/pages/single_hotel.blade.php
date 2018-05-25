@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')


<!--====== BANNER ==========-->
<section>
  <div class="rows inner_banner innebanner_2">
    <div class="container">
      <h2><span>Have a Confortable stay with us</span></h2>
      <ul>
        <li><a href="#inner-page-title">Home</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="#inner-page-title" class="bread-acti">Hotel</a>
        </li>
      </ul>

    </div>
  </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
  <div class="rows banner_book" id="inner-page-title">
    <div class="container">
      <div class="banner_book_1">
        <ul>
          <li class="dl1">Location : {{ $hotel->location }}</li>
          <li class="dl2">Tel :{{ $hotel->contact }}</li>
          <li class="dl3">Duration : One Night</li>

        </ul>
      </div>
    </div>
  </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">

    

      <div class="col-md-5">
        <!--====== TOUR TITLE ==========-->
        <div class="tour_head">
          <center><h3> {{ $hotel->name }} <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
          </h3></center>
          <hr>
         </div>
        <!--====== TOUR DESCRIPTION ==========-->



        <div class="tour_head1 hotel-com-color">
          <h3>{{ $hotel->contact }}</h3>
          <p>{{ $hotel->description }}</p>

        </div>


      </div>
      <div class="col-md-3 tour_r">
        <!--====== SPECIAL OFFERS ==========-->
        <div class="tour_right ">

          <img src="{{ asset($hotel->image) }}" style="width: 120%;">



        <!--====== PUPULAR TOUR PACKAGES ==========-->

      </div>
    </div>
  </div>
</section>



@endsection