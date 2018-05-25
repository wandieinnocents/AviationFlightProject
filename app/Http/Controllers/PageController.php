<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Hotel;
use App\Models\Parking;
use App\Models\Shop;
use App\Models\Transport;
use App\Models\Inspiration;
use App\AirlineApi;
use DB;
use Gmopx\LaravelOWM\LaravelOWM;







class PageController extends Controller

{

  //status
  public function status($ident){


    $faClient = new \iansltx\FlightAwareClient\Client('AlexSanya',
      '431bdb672e10c762fe4477250fecdd5896694b8a');

    $inFlightInfo = $faClient->FlightInfoEx("KQA416");


   // $lastTrack = $faClient->getLastTrack($ident);
    // $array_reduce($array, 'array_merge', array());

    //dd($lastTrack);
    return $inFlightInfo;
    // dd($inFlightInfo);
  }



  public function test(){
    $this->get_icon_url("ETH");
  }


  public function get_icon_url($icao)
  {
  $pick= DB::table("airline_api")->where("icao",$icao)->first();



  if(sizeof($pick)>0){
      $value=strtolower($pick->IATA);
    }else{
      $value="ba";
    }

    $UrlIcon = 'http://d3brl4nqahsb3e.cloudfront.net/logos/png/300x100/'.$value.'-logo.png';
    return dd($UrlIcon);

  }
  public function weather(){


     return view('pages.weather');
  }


  public function about()
  {
    return view('pages.about');
  }

  public function welcome(){

    return view('welcome');
  }

  public function flight()

  {

    //flight here
    $rUrl = 'https://easyflightt.herokuapp.com/api/enroute/ebb';

    $rUrl2 = 'https://easyflightt.herokuapp.com/api/scheduled/ebb';

    $data = json_decode(file_get_contents($rUrl), true);

    $data_departures = json_decode(file_get_contents($rUrl2), true);
    // $data = dd(json_decode(file_get_contents($rUrl), true));

    // return view('pages.flight')->withData($data);
   return view('pages.flight',['data' =>$data , 'data_departures'=> $data_departures, 'controller' => $this]);

  }



  public function arrivals(){


    //plight here
    $rUrl = 'https://easyflightt.herokuapp.com/api/enroute/ebb';

    $UrlIcon = 'http://caafrights.com/air.php?icao=ERT';


  //  $UrlIcon = 'http://d3brl4nqahsb3e.cloudfront.net/logos/png/300x100/ba-logo.png';

  //iconUrlsingle =  http://caafrights.com/air.php?icao=ERT

    //encoding two json urls
    //json_encode(array_merge(json_decode($a, true),json_decode($b, true)))
//  $data =  json_encode(array_merge(json_decode(file_get_contents($rUrl), true),json_decode(file_get_contents($UrlIcon), true)));



    $data = json_decode(file_get_contents($rUrl), true);
    $data_icons = json_decode(file_get_contents($UrlIcon), true);


    // $data = dd(json_decode(file_get_contents($rUrl), true));

  //  return view('pages.arrivals')->withData($data);
//  dd($data);
    return view('pages.arrivals',compact('data','data_icons'));

  //  return view('pages.flight',compact('data'));
    #arrivals here from api
  //  return view('pages.arrivals');

  }

  public function departures(){

    //plight here
    $rUrl = 'https://easyflightt.herokuapp.com/api/scheduled/ebb';

    $data = json_decode(file_get_contents($rUrl), true);
    // $data = dd(json_decode(file_get_contents($rUrl), true));

    return view('pages.departures')->withData($data);
  //  return view('pages.flight',compact('data'));
    #arrivals here from api

    //return view('pages.departures');

  }
  public function icon(){

      $UrlIcon = 'http://caafrights.com/air.php?icao=ERT';

    $datas = json_decode(file_get_contents($UrlIcon), true);

   // dd($datas);

    return view('pages.icons',compact('datas'));
  }
  public function accomodation()
  {
    return view('pages.accomodation');
  }

  public function parking()
  {
    $parkings = Parking::all();
    return view('pages.parking',compact('parkings'));
  }

  public function transport()
  {
    $transports = Transport::all();
    return view('pages.transport',compact('transports'));
  }

  public function hotel()
  {
    $hotel_cats = Hotel::orderBy('created_at','desc')->take(10)->get();
    $hotels = Hotel::all();
    return view('pages.hotel',compact('hotels','hotel_cats'));
  }

  public function shop()
  {
    $shops = Shop::all();
    return view('pages.shop',compact('shops'));
  }

  public function inspiration()
  {
    $inspirations = Inspiration::all();
    return view('pages.inspiration',compact('inspirations'));
  }



  public function contact()
  {
    return view('pages.contact');
  }

  //search for flithts
  public function flightsearch(Request $req){

    //
    $rUrl = 'https://easyflightt.herokuapp.com/api/enroute/ebb';
    $data = file_get_contents($rUrl);
    $characters = json_decode($data);

    //query codes
    if($req->search == ""){

      $datas = $characters;
      return view('pages.flightsearch',compact('datas'));

    }
    else{

      // $datas = Hotel::where('name','LIKE', '%' . $req->search . '%')->paginate(3);
      $datas = $characters->where('name','LIKE', '%' . $req->search . '%')->paginate(3);
      $datas->appends($req->only('search'));
    //  dd($datas);
      return view('pages.flightsearch',compact('datas'));
    }


     // $decoded_var = $characters[1]->destinationName;
     //
     // dd($decoded_var);



     //inforattio search codde


  }

  //search hotels
  public function searchhotel(Request $req){
    //quering the search results

    if($req->search == ""){
      $datas = Hotel::paginate(1);
      return view('pages.searchhotel',compact('datas'));

    }
    else{

      $datas = Hotel::where('name','LIKE', '%' . $req->search . '%')->paginate(3);
      $datas->appends($req->only('search'));
    //  dd($datas);
      return view('pages.searchhotel',compact('datas'));
    }


  //  return view('pages.searchhotel');
  }

public function jsontest(){

  return view('pages.jsontest');
}




}
