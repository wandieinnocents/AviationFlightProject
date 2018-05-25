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
        <h1>Shopping places at the airport </h1>
        <ul>
          <li><a href="{{ url('/') }}">Home</a> </li>
          <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
          <li><a href="{{ url('/shop') }}" class="bread-acti">Shops</a> </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="hot-page2-alp-con">
        <!--LEFT LISTINGS-->
        <div class="col-md-3 hot-page2-alp-con-left">
          <!--PART 1 : LEFT LISTINGS-->
          <div class="hot-page2-alp-con-left-1">
            <h3>Suggesting Hotels</h3> </div>
          <!--PART 2 : LEFT LISTINGS-->
          <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
            <ul>
              <!--LISTINGS-->
              @foreach($shops as $shop)
              <li>
                <a href="/shop/{{ $shop->id }}">
                  <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ $shop->image }}" alt=""> </div>
                  <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                    <h5>{{ $shop->name }}</h5> <span>{{ $shop->location }}</span> </div>
                  <!-- <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span> </div> -->
                </a>
              </li>
              @endforeach

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
              @foreach($shops as $shop)
              <div class="hot-page2-alp-r-list">
                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                  <a href="javascript:void(0);">
                    <div class="hotel-list-score">4.5</div>
                    <div class="hot-page2-hli-1"> <img src="{{ $shop->image }}" alt=""> </div>
                    <!-- <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div> -->
                  </a>
                </div>
                <div class="col-md-6">
                  <div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>{{ $shop->name }}</h3></a>
                    <ul>
                      <li>{{ $shop->location }}</li>

                    </ul>
                    <p>{{ str_limit($shop->description, $end = '180' , '..') }}</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="hot-page2-alp-ri-p3">
                    <div class="hot-page2-alp-r-hot-page-rat">Phone: {{ $shop->contact }}</div>
                    <!-- <span class="hot-list-p3-1">Price Per Night</span> -->
                    <!-- <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4"> -->
                      <a href="/shop/{{ $shop->id }}" class="hot-page2-alp-quot-btn">VIEW MORE</a>
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
