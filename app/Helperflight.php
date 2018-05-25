<?php
namespace App\Helperflight;


class AppHelper

{

      public function flightstatus($indent)

      {

	 $faClient = new \iansltx\FlightAwareClient\Client('AlexSanya',
	      '431bdb672e10c762fe4477250fecdd5896694b8a');

    $inFlightInfo = $faClient->FlightInfoEx($ident);


   // $lastTrack = $faClient->getLastTrack($ident);
    // $array_reduce($array, 'array_merge', array());

    //dd($lastTrack);
    return $inFlightInfo;
      }


}