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
        <h1>Parking</h1>
        <ul>
          <li><a href="{{ url('/') }}">Home</a> </li>
          <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
          <li><a href="{{ url('/parking') }}" class="bread-acti">Parking</a> </li>
        </ul>
        <p>Explore our parking areas at the airport </p>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <!--LISTINGS START-->

        <div class="hot-page2-alp-r-list">

          <div class="col-md-6">
            <div class="hot-page2-alp-ri-p2"> <a href="#"><h3>About Parking at Airport</h3></a>
              <ul>
                <li>Parking</li>

              </ul>
              <p>Entry to Entebbe International Airport’s car parking is automated, making parking at
                the Airport a smoother experience. At the entrance, drivers are urged to slow down, stop at the ticket dispensing machine, press a button and wait for a parking ticket (takes about 10 seconds for the ticket to be dispensed), pick the ticket and slowly approach the barrier. It is necessary
                 to keep the ticket safely as it is required on exit (drive out).</p>
            </div>
            </div>

            <div class="col-md-6">
              <div class="hot-pae2-alp-ri-p2"> <a href="#"><h3>Parking Fees</h3></a>

                <ul>
                  <li>Saloon Cars 2,000/= (Uganda Shillings for the first one hour, 500/= every extra hour)</li>
                  <li>Mini-buses and Lorries 2,500/= (for the first one hour, 500/= every extra hour)</li>
                  <li>Trucks and Buses 3,500/= (for the first one hour, 500/= every extra hour)</li>
                  <li>Trailers 5,000/= (for the first one hour, 500/= every extra hour)</li>
                  <li>Motorcycles (Bodaboda) 500/=</li>
                </ul>

              </div>
              </div>


          </div>

        </div>

      <div class="hot-page2-alp-con">
        <!--LEFT LISTINGS-->
        <div class="col-md-3 hot-page2-alp-con-left">
          <!--PART 1 : LEFT LISTINGS-->
          <div class="hot-page2-alp-con-left-1">
            <h3>Top Parkings</h3> </div>
          <!--PART 2 : LEFT LISTINGS-->
          <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
            <ul>
              <!--LISTINGS-->
              @foreach($parkings as $parking)
              <li>
                <a href="/parking/{{ $parking->id }}">
                  <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ $parking->image }}" alt=""> </div>
                  <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                    <h5>{{ $parking->name }}</h5>
                     <span>{{ $parking->address }}</span> </div


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
              @foreach($parkings as $parking)
              <div class="hot-page2-alp-r-list">
                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                  <a href="javascript:void(0);">
                    <!-- <div class="hotel-list-score">4.5</div> -->
                    <div class="hot-page2-hli-1"> <img src="{{ $parking->image }}" alt=""> </div>
                    <!-- <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div> -->
                  </a>
                </div>
                <div class="col-md-6">
                  <div class="hot-page2-alp-ri-p2"> <a href="/parking/{{ $parking->id }}"><h3>{{ $parking->name }}</h3></a>
                    <ul>
                      <li>{{ $parking->address }}</li>

                    </ul>
                    <p>{{ $parking->description }}
                      {{ str_limit($parking->description, $end = '150', '..') }}
                    </p>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="hot-page2-alp-ri-p3">
                    <div class="hot-page2-alp-r-hot-page-rat">Parking Slot</div>
                     <span class="hot-list-p3-1">Price</span>
                    <span class="hot-list-p3-2"> {{ $parking->fee }}</span><span class="hot-list-p3-4">
                      <a href="/parking/{{ $parking->id }}" class="hot-page2-alp-quot-btn">View More</a>
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
      <div class="col-md-12 hot-page2-alp-con-right">
        <div class="hot-page2-alp-con-right-1">
          <!--LISTINGS-->

          </div>
        </div>
      </div>


  </div>
</section>

@endsection
