<?php



//$url = 'https://docs.google.com/spreadsheet/pub?key=0AtCs8oPrTSk_dFNncUhTd3Rrb2VZc1FnTFdtT3hWcHc&output=csv';

// COURSE LIST
$url = 'http://docs.google.com/spreadsheet/pub?key=0AtCs8oPrTSk_dHdUQ1FYUm10bmlBUW1mMEdsaDVPRXc&output=csv';
// BOOK LIST
$url2 = 'http://docs.google.com/spreadsheet/pub?key=0AtCs8oPrTSk_dHJOM2QwY2FkeHM5UWtFMWhqSFJTTmc&output=csv';


echo '<html><head><title>Google Doc Export</title>';
echo '<style language="stylesheet">html { font-family: Verdana; background: #dcd0a0;} tbody tr:nth-child(odd) { background-color: #EADCAD; } tbody tr:nth-child(even) { background-color: #E0D3A8; } ';
echo 'table.tech {font-size: 15px; border-width: 0px; border-spacing: 0px; border-style: solid; border-color: #005000; border-collapse: separate;} table.tech td {border-style: hidden; padding: 3px 5px;} table.tech tr:hover {background-color: #dcd0a0;} table.tech th {background-color: #ccc; color: black; padding: 9px 16px; -moz-border-radius:10px; -webkit-border-top-left-radius:10px; border-top-left-radius:10px; border-top-right-radius:10px;} .last tr {-moz-border-radius:10px; -webkit-border-bottom-left-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;}';
echo '.TH {font-size: 20px;}';
echo 'div#round {position: absolute; top:0; left:0; background-color: #dcd0a0; padding:10px; width: 685px; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px; border: 1px solid black;}</style></head>';
echo '<body>';
echo '<div id="round"><table class="tech"><tbody>';

echo '<tr class="TH" style="padding: 10px;">';
echo '<td style="text-align: center;padding:0 10px;">DEPT</td>';
echo '<td style="text-align: center;padding:0 10px;">NBR</td>';
echo '<td style="text-align: left;padding:0 15px;">COURSE TITLE</td>';
echo '<td style="text-align: center;padding:0 5px;">CRDTS</td>';
//echo '<td style="text-align: center;padding:0 5px;">MORE INFO.</td>';
echo '<td style="text-align: center;padding:0 15px;">BOOK</td></tr>';

$fp = fopen($url,'r');
$fp2 = fopen($url2,'r');

$x = 0;

while(!feof($fp2)){
	$line = fgets($fp2);
	$bookinfo[$x] = explode(',',$line);
	$x++;
}


while(!feof($fp)){
	$line = fgets($fp);
	$info = explode(',',$line);
	$length = sizeof($info) - 1;
	if($info[0] != '') {
	// Find the matching book
	$booklink = getBook($info[0],$info[1], $bookinfo);

		echo '<tr><td style="text-align: left;padding:0 20px;">'.$info[0].'</td>';
		echo '<td style="text-align: left;padding:0 20px;">'.$info[1].'</td>';
		echo '<td><a href="http://www.wosc.edu/index.php?page=spring-course-listing-gdoc#'.$info[0].'" target="_top"><img src="http://wosc.edu/img/icons/tv.png" width="16" style="padding:0 12px 0 28px;" alt="video" title="Decsription, Syllabus, and Intro Video to this Course!">'.$info[2].'</a></td>';
		echo '<td style="text-align: center;padding:0 20px;">'.$info[3].'</td>';
//		echo '<td style="text-align: right;padding:0 20px;"><a href="http://www.wosc.edu/index.php?page=spring-course-listing-gdoc#'.$info[0].'" target="_top">Course Desc.</a></td>';
		echo '<td>'.$booklink.'</td></tr>';
	}

}
echo '<tr><td colspan="7">* Enrollment numbers for each class can be viewed in Campus Connect only</td></tr>';
echo '</tbody></table></div></body></html>';

function getBook($prefix, $courseNum, $booksArray) {
	$x = count($booksArray);
	$bookinfo = $booksArray;
	for($y = 0; $y < $x; $y++){
		if ($bookinfo[$y][0] == trim($prefix)) {
        		if (trim($bookinfo[$y][1]) == trim($courseNum)){
                		$booklink = '<a href="'.$bookinfo[$y][5].'" title="E-Book for this Course! (opens a new window)" target="_blank"><img src="http://wosc.edu/img/icons/books.png" width="16" style="padding:0 12px 0 28px;" alt="books" title="Book for this Course!">Book Link</a>';
                	}	
		}
	}
	
	if(!isset($booklink)) {
		$booklink = "<span style='padding:0 0 0 52px;'>NO MATCH</span>";
        }
	return $booklink;
}

?>
