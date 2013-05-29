<?php



//echo '<div style="z-index:99999; width: 100%; position:absolute; top:0; right:0; font-size: 222%;"><marquee bgcolor="yellow">
//This is a test of the Pioneer Alert System.
//</marquee></div>';



$viewType = "powerpoint"; // This is the Ambassadors Google Slideshow.
//$viewType = "weather"; // This is the Weather block / IT Connectivity status.
//$viewType = "tv"; // This is the TV Channel, news mostly.




echo '<div style="z-index:99999; width: 100%; position:absolute; bottom:0; right:0;"><img src="http://wosc.edu/img/tv-social.png"></div>';


switch ($viewType) {
    case "powerpoint":
        include "include-powerpoint.php";
        break;
    case "weather":
        include "include-weather.php";
        break;
    case "tv":
        include "include-tv.php";
        break;
}



?>
