@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')




<!--====== BANNER ==========-->
<section>
  <div class="rows inner_banner inner_banner_5">
    <div class="container">
      <h2><span>Tips -</span> For your Travel</h2>
      <ul>
        <li><a href="#inner-page-title">Home</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="#inner-page-title" class="bread-acti">Tips Before Travel</a>
        </li>
      </ul>
    </div>
</div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space pad-bot-redu" id="inner-page-title">
      <!-- TITLE & DESCRIPTION -->
      <div class="spe-title col-md-12">
        <h2>Tips <span>Before Travel</span></h2>
        <div class="title-line">
          <div class="tl-1"></div>
          <div class="tl-2"></div>
          <div class="tl-3"></div>
        </div>
        <p>Have a safe Travel, have a look at some of these tips</p>
      </div>

      <div class="tips_travel_1">
        <ul>
          <!--TIPS LIST-->
          @foreach($inspirations as $inspiration)
          <li class="col-md-4 col-sm-4">
            <div class="tips_travel_2">
               <!-- <i class="fa fa-flag-o" aria-hidden="true"></i> -->
               <img src="{{ $inspiration->image }}" alt="" class="img-rounded" style="width: 20%;height:40%;">
              <h4><a href="/inspiration/{{ $inspiration->id }}"><b>{{ $inspiration->heading }}</b></a></h4>
              <p> {{  str_limit($inspiration->inspiration, $limit = 170, $end = '..') }}</p>

              <hr>
              <h6> <a href="/inspiration/{{ $inspiration->id }}">Author: {{ $inspiration->author }}</a></h6>
            </div>
          </li>
          @endforeach

        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
