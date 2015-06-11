<?php


	$city=$_GET['city'];
	$city=str_replace(" ", "", $city);
	$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

	preg_match('/Day Weather Forecast Summary:<\/b>(.+?)<\/p>/s', $contents, $matches);  

	preg_match('/<span class="phrase">(.+?)<\/span/s', $matches[1],$edit);

	echo $edit[1];
?>