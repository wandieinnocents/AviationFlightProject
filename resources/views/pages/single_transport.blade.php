@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')


<!--====== BANNER ==========-->
<section>
  <div class="rows inner_banner inner_bner_2">
    <div class="container">
      <h2><span>Let the transportation be handled for you..</span></h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="{{ url('/transport') }}" class="bread-acti">Transport</a>
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
        <!-- <ul>
          <li class="dl1">Location : {{ $transport->address }}</li>
          <li class="dl2">Tel :{{ $transport->contact }}</li>
          <li class="dl3">Duration : One Night</li>

        </ul> -->
      </div>
    </div>
  </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">

      <div class="col-md-4 tour_r">
        <!--====== SPECIAL OFFERS ==========-->
        <div class="tour_right tour_offer">


        <div class="tour_right head_right tour_help tour-ri-com">

        </div>
        <!--====== PUPULAR TOUR PACKAGES ==========-->
        <div class="tour_right tour_rela tour-ri-com">
          <h3><center>{{ $transport->name}}</center></h3>

          >
          <div class="tour_rela_1"> <img src="assets/images/related3.png" alt="" />
            <h4>{{ $transport->location }}</h4>
            <p>{{ $transport->name }}</p>

           </div>
        </div>
      </div>
    </div>

      <div class="col-md-5">
        <!--====== TOUR TITLE ==========-->
        <div class="tour_head">
          <center><h3> {{ $transport->name }} <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
          </h3></center>
          <hr>
         </div>
        <!--====== TOUR DESCRIPTION ==========-->



        <div class="tour_head1 hotel-com-color">

          <p>{{ $transport->description }}</p>

        </div>


      </div>
      <div class="col-md-3 tour_r">
        <!--====== SPECIAL OFFERS ==========-->
        <div class="tour_right ">

          <img src="{{ asset($transport->image) }}" style="width: 120%;">



        <!--====== PUPULAR TOUR PACKAGES ==========-->

      </div>
    </div>
  </div>
</section>



@endsection
