@extends('layouts.app')


@section('content')

<pre>
  //testing for the epoch time

  <br>
  Manual testing::

  <?php
  //1524735300

// echo date('m-d-Y h:i',time());
date_default_timezone_set('America/Chicago');
date_default_timezone_set('Africa/Nairobi');



// echo "Today is " . date('Y-m-d H:i:s');
echo "Today is " . date('M-dS-Y \a\t h:i A',time());


  ?>

  <pre>


@endsection
