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
      <h2><span>Have a hospital with us</span></h2>
      <ul>
        <li><a href="#inner-page-title">Home</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="#inner-page-title" class="bread-acti">hospital</a>
        </li>
      </ul>

    </div>
  </div>
</section>
<!--====== hospital DETAILS - BOOKING ==========-->
<section>
  <div class="rows banner_book" id="inner-page-title">
    <div class="container">
      <div class="banner_book_1">
        <ul>
          <li class="dl1">Location : {{ $hospital->location }}</li>
          <li class="dl2">Tel :{{ $hospital->contact }}</li>
          
        </ul>
      </div>
    </div>
  </div>
</section>
<!--====== hospital DETAILS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">

    

      <div class="col-md-5">
        <!--====== hospital TITLE ==========-->
        <div class="hospital_head">
          <center><h3> {{ $hospital->name }} <span class="hospital_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
          </h3></center>
          <hr>
         </div>
        <!--====== hospital DESCRIPTION ==========-->



        <div class="hospital_head1 hotel-com-color">
          <h3>{{ $hospital->contact }}</h3>
          <p>{{ $hospital->description }}</p> 

        </div>


      </div>
      <div class="col-md-3 hospital_r">
        <!--====== SPECIAL OFFERS ==========-->
        <div class="hospital_right ">

          <img src="{{ asset($hospital->image) }}" style="width: 120%;">



        <!--====== PUPULAR hospital PACKAGES ==========-->

      </div>
    </div>
  </div>
</section>



@endsection
