
@extends('layouts.app')

@section('title')

@endsection

@section('description')

@endsection

@section('content')

<!--====== POPULAR TOUR PLACES ==========-->
<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title spe-title-1">
                <h2>Top <span>Transport </span> facilities</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>Browse the transport means that are available at the airport</p>
            </div>
            <div class="popu-places-home">
                <!-- POPULAR PLACES 1 -->
                @foreach($transports as $transport)
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="{{ $transport->image }}" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>{{ $transport->name }}</span> </h3>
                        <h3><span>{{ $transport->address }}</span> </h3>
                        <p>

                          {{  str_limit( $transport->description, $limit = 120, $end = '..') }}
                        </p> <a href="/transport/{{ $transport->id }}" class="link-btn">more info</a> </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
</section>

@endsection
