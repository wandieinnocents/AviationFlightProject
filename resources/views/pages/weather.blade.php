
<?php

//units=For temperature in Celsius use units=metric
//5128638 is new york ID
date_default_timezone_set('Africa/Nairobi');
$url = "http://api.openweathermap.org/data/2.5/weather?q=kampala&APPID=cee095b1cc03be80e981687ef8c0c00b";


$contents = file_get_contents($url);
$clima=json_decode($contents);

$temp_max=$clima->main->temp_max;
$temp_min=$clima->main->temp_min;
$icon=$clima->weather[0]->icon.".png";
//how get today date time PHP :P

$today = date("F j, Y, g:i a");
$cityname = $clima->name;

echo $cityname . " - " .$today . "<br>";
echo "Temp Max: " . $temp_max ."&deg;C<br>";
echo "Temp Min: " . $temp_min ."&deg;C<br>";
echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";


?>
