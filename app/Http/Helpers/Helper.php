<?php

use App\AirlineApi;

use DB;

function get_icon_url($icao){
  $pick= DB::table("airline_api")->where("icao",$icao)->first();

if(sizeof($pick)>0){
    $value=strtolower($pick->IATA);
  }else{
    $value="ba";
  }

  $UrlIcon = 'http://d3brl4nqahsb3e.cloudfront.net/logos/png/300x100/'.$value.'-logo.png';
  return $UrlIcon;

  }



 ?>
