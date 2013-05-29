<?php



$url = 'http://docs.google.com/spreadsheet/pub?key=0AtCs8oPrTSk_dEN1bHBtUHo4XzRPVG8zbGxPT1RueFE&single=true&gid=0&output=csv';

echo '<html><head><title>IT Service Status</title>';
echo '<style language="stylesheet">html {font-size: 130%; font-family: Verdana;} tbody tr:nth-child(odd) { background-color: #ddd; } tbody tr:nth-child(even) { background-color: #fff; } ';
echo 'table.tech {font-size: 19px; border-width: 0px; border-spacing: 0px; border-style: solid; border-color: #005000; border-collapse: separate;} table.tech td {border-style: hidden; padding: 3px 5px;} table.tech th {background-color: #ccc; color: black; padding: 9px 16px; -moz-border-radius:10px; -webkit-border-top-left-radius:10px; border-top-left-radius:10px; border-top-right-radius:10px;} .last tr {-moz-border-radius:10px; -webkit-border-bottom-left-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;}';
echo 'div#round {position: absolute; top:35; left:35; background-color: white; padding:10px; width: 320px; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px; border: 1px solid black;}</style></head>';
echo '<body>';
echo '<div id="round"><table class="tech"><tbody>';
echo '<th colspan="2">WOSC Connectivity Status</th>';

$fp = fopen($url,'r');

while(!feof($fp)){
$line = fgets($fp);

$info = explode(',',$line);
$length = sizeof($info) - 1;
if (trim($info[$length]) == 'r') { $color = '<img src="http://www.wosc.edu/img/icons/itstatus-r.png" style="padding: 0 5px;" alt="Down" title="Down" />'; }
elseif (trim($info[$length]) == 'b') { $color = '<img src="http://www.wosc.edu/img/icons/itstatus-b.png" style="padding: 0 5px;" alt="Scheduled Downtime" title="Scheduled Downtime" />'; }
elseif (trim($info[$length]) == 's') { $color = '<img src="http://www.wosc.edu/img/icons/itstatus-b.png" style="padding: 0 5px;" alt="Scheduled Downtime" title="Scheduled Downtime" />'; }
elseif (trim($info[$length]) == 'y') { $color = '<img src="http://www.wosc.edu/img/icons/itstatus-y.png" style="padding: 0 5px;" alt="Slow or Problematic" title="Slow or Problematic" />'; }
else $color = '<img src="http://www.wosc.edu/img/icons/itstatus-g.png" style="padding: 0 5px;" alt="Fully Operational" title="All Systems Go! 5-by-5!" />';

switch($info[0]) {
	case "Google Apps Status (Email)":
		echo '<tr><td>'.$color.'</td><td>Google Apps Status (Email)</td></tr>';
		//echo '<tr><td><img src="http://www.wosc.edu/img/icons/itstatus-r.png" style="padding: 0 5px;" alt="Down" title="Down" /></td><td>Google Apps Status (Email)</td></tr>';		
		break;
	case "Poise/Campus Connect":
		echo '<tr><td>'.$color.'</td><td>Poise/Campus Connect"</td></tr>';
		break;
	case "Website - wosc.edu":
		echo '<tr><td>'.$color.'</td><td>Website - wosc.edu</td></tr>';
		break;
	case "Campus Network":
		echo '<tr><td>'.$color.'</td><td>Campus Network</td></tr>';
		break;
	case "Lab Network":
		echo '<tr><td>'.$color.'</td><td>Lab Network</td></tr>';
		break;
	case "ITV Class":
		echo '<tr><td>'.$color.'</td><td>ITV Class</td></tr>';
		break;
	case "Tech Ed":
		echo '<tr><td>'.$color.'</td><td>Tech Ed</td></tr>';
		break;
	case "Phones":
		echo '<tr><td>'.$color.'</td><td>Phones</td></tr>';
		break;
	case "Moodle":
		echo '<tr><td>'.$color.'</td><td>Moodle</td></tr>';
		break;
	case "Onenet":
		echo '<tr><td>'.$color.'</td><td>Internet Provider</td></tr>';
		break;
//	case "Power":
//		echo '<tr class="last"><td>'.$color.'</td><td>Power</td></tr>';
//		break;
	default:
		break;
}
}
//echo '<tr><td colspan="2">';
//echo '<img src="http://www.wosc.edu/img/icons/itstatus-g.png" style="padding: 0 5px;" alt="Fully Operational" title="All Systems Go! 5-by-5!" /> = Up!';
//echo '<img src="http://www.wosc.edu/img/icons/itstatus-y.png" style="padding: 0 5px;" alt="Slow or Problematic" title="Slow or Problematic" /> = Slow.<br />';
//echo '<img src="http://www.wosc.edu/img/icons/itstatus-r.png" style="padding: 0 5px;" alt="Down" title="Down" /> = Down.';
//echo '<img src="http://www.wosc.edu/img/icons/itstatus-b.png" style="padding: 0 5px;" alt="Scheduled Downtime" title="Scheduled Downtime" /> = Maint.';
//echo '</td></tr>';
echo '</tbody></table></div></body></html>';
?>
