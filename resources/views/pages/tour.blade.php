@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')


<!--====== HOTELS LIST ==========-->
<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
  <div class="container">
    <div class="row inner_banner inner_banner_3 bg-none">
      <div class="hot-page2-alp-tit">
        <h1>Tourism Companies on the platform </h1>
        <ul>
          <li><a href="#inner-page-title">Home</a> </li>
          <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
          <li><a href="#inner-page-title" class="bread-acti">tours</a> </li>
        </ul>

      </div>
    </div>
    <div class="row">
      <div class="hot-page2-alp-con">
        <!--LEFT LISTINGS-->
        <div class="col-md-3 hot-page2-alp-con-left">
          <!--PART 1 : LEFT LISTINGS-->
          <div class="hot-page2-alp-con-left-1">
            <h3>Top Tours</h3> </div>
          <!--PART 2 : LEFT LISTINGS-->
          <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
            <ul>
              <!--LISTINGS-->
              @foreach($toursascendings as $tour)
              <li>
                <a href="#">
                  <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ $tour->image }}" alt=""> </div>
                  <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                    <h5><a href="/tour/{{ $tour->id }}">{{ $tour->name }}</a></h5> <span>{{ $tour->location }}</span> </div>
                  <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> </div>
                </a>
              </li>
              @endforeach
              <!--LISTINGS-->

            </ul>
          </div>
          <!--PART 7 : LEFT LISTINGS-->


          <!--END PART 4 : LEFT LISTINGS-->

        </div>
        <!--END LEFT LISTINGS-->
        <!--RIGHT LISTINGS-->
        <div class="col-md-9 hot-page2-alp-con-right">
          <div class="hot-page2-alp-con-right-1">
            <!--LISTINGS-->

            <div class="row">
              <!--LISTINGS START-->
              @foreach($tours as $tour)
              <div class="hot-page2-alp-r-list">
                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                  <a href="javascript:void(0);">
                    <div class="hotel-list-score"></div>
                    <div class="hot-page2-hli-1"> <img src="{{ $tour->image }}" alt=""> </div>
                    <!-- <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div> -->
                  </a>
                </div>
                <div class="col-md-6">
                  <div class="hot-page2-alp-ri-p2"> <a href="/tour/{{ $tour->id }}"><h3>{{ $tour->name }}</h3></a>
                    <ul>
                      <li>{{ $tour->location }}</li>


                    </ul>
                    <p>About: {{  str_limit( $tour->description, $limit = 120, $end = '..') }}</li></p>

                    <p>Tel: {{ $tour->contact }}</li></p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="hot-page2-alp-ri-p3">
                    <!-- <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> -->
                     <!-- <span class="hot-list-p3-2">$650</span> -->
                    <span class="hot-list-p3-4">
                      <a href="/tour/{{ $tour->id }}" class="hot-page2-alp-quot-btn">VIEW DETAILS</a>
                    </span> </div>
                </div>
              </div>
              @endforeach
              <!--END LISTINGS-->





            </div>

          </div>
        </div>
        <!--END RIGHT LISTINGS-->
      </div>
    </div>
  </div>
</section>

@endsection
