<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Hotel;



 

//
// Route::get('/',  function () {
//
//
//   $rUrl = 'https://easyflightt.herokuapp.com/api/enroute/ebb';
//   //departures
//   $rUrl2 = 'https://easyflightt.herokuapp.com/api/scheduled/ebb';
//
//    $data_arrivals = json_decode(file_get_contents($rUrl), true);
//
//    $data = array_slice($data_arrivals, 0, 4);
//
//
//    $data_departures_to_slice = json_decode(file_get_contents($rUrl2), true);
//    $data_departures = array_slice($data_departures_to_slice,0,4);
//
//    $hotels = Hotel::all();
//
//    // return view('welcome',compact('hotels','data','data_departures'));
//    return view('welcome',['hotels'=>$hotels,'data' =>$data , 'data_departures'=> $data_departures, 'controller' => $this]);
//
//
// });

Route::get('/','PageController@homepager');
Route::get('/test','PageController@test');

Route::get('/status','PageController@status');

Route::get('/jsontest','PageController@jsontest');
Route::get('/weather','PageController@weather');
Route::get('/flightsearch','PageController@flightsearch');
Route::get('/searchhotel','PageController@searchhotel')->name('searchhotel');
Route::get('/about','PageController@about');
Route::get('/flight','PageController@flight');
//tours
Route::get('/tour','TourController@index');
Route::get('/tour/{tour}','TourController@show');

//embasy
Route::get('/embasy','EmbasyController@index');
Route::get('/embasy/{embasy}','EmbasyController@show');
//forex bureaui
Route::get('/forexbureau','ForexBureauController@index');
Route::get('/forexbureau/{forexbureau}','ForexBureauController@show');
//hospitals
Route::get('/hospital','HospitalController@index');
Route::get('/hospital/{hospital}','HospitalController@show');

Route::get('/accomodation','PageController@accomodation');
Route::get('/parking','PageController@parking');
Route::get('parking/{parking}','ParkController@show');
Route::get('/transport','PageController@transport');
Route::get('/transport/{transport}','TransportController@show');

Route::get('/hotel','PageController@hotel');
Route::get('/hotel/{hotel}','HotelController@show');
Route::get('/shop','PageController@shop');
Route::get('/shop/{shop}','ShopController@show');

Route::get('/inspiration','PageController@inspiration');
Route::get('/inspiration/{inspiration}','InspirationController@show');
Route::get('/contact','PageController@contact');
Route::get('/arrivals','PageController@arrivals');
Route::get('/departures','PageController@departures');

Route::get('/icon','PageController@icon');
