<?php

ob_start();
session_start();
require_once('resources/dbconfig.php');

$showmonth = $_POST['showmonth'];
$showyear = $_POST['showyear'];
// $showmonth = 2 ;
// $showyear = 2013 ;


$showmonth = preg_replace('#[^0-9]#i', '', $showmonth);
$showyear = preg_replace('#[^0-9]#i', '', $showyear);

date_default_timezone_set('UTC');

// $showmonth = 3 ;
// $showyear = 2013 ;

$month_name = date( 'F', mktime(0, 0, 0, $showmonth) );

//Logic to paint the current day
$currDate =  date("d");
$currMonth = date("m");
$currMonth = $currMonth + 0 ;
$currYear = date("Y");
$currYear = $currYear + 0 ;
if($currMonth == $showmonth && $currYear == $showyear){
	$currDate = $currDate + 0 ;
}else{
	$currDate = -1 ;
}

$day_count = cal_days_in_month(CAL_GREGORIAN, $showmonth, $showyear);
$pre_days = date('w', mktime(0, 0, 0, $showmonth, 1, $showyear));
$post_days = (6 - (date('w', mktime(0, 0, 0, $showmonth, $day_count, $showyear)))) ;

$deets = $showmonth . '%' . $showyear ;

$monthInAlpha = array( 0 => 'JAN', 
					1 => 'FEB', 2 => 'MAR', 3 => 'APR', 4 => 'MAY', 5 => 'JUN', 6 => 'JUL', 7 => 'AUG', 8 => 'SEP', 9 => 'OCT', 10 => 'NOV', 11 => 'DEC') ;

$showHead = $monthInAlpha[$showmonth - 1] . " " . $showyear ;

$events = '' ;

$q = 'select `description`, `title`, `duration`, `by`, `evdate` from events where evdate like "' . $deets . '"' ;

$query = mysql_query($q) or die("Can not run query");
$num_rows = mysql_num_rows($query);
if($num_rows > 0){
	//$events .= '<div id="eventControl"><button onMouseDown="javascript:overlay();">Close</button><br/><br/><b> ' . $deets . '</b><br/><br/></div> ' ;
	
	$count=1;
	while($row = mysql_fetch_array($query)){
		$desc = $row['description'];
		$title = $row['title'];
		$by = $row['by'];
		$duration = $row['duration'];
		$evdate = $row['evdate'];
		if($count == 1){
			$events .= "<h3>Events on " . $showHead . "</h3><hr>" ;
		}
		$events .= "<div id='eventBody'><h4>$title on $evdate</h4><p class='desc'>" . $desc . "</p><p class='duration'>Duration: <b>" . $duration . "</b></p><p class='poweredBy'>Powered By: <b>" . $by . "</b></p></div><hr>" ;
		//$events .= "<ul><li><strong>Event #" . $count . "</strong></li></ul>" ;
		// $events .= "<br/><u>Title: </u><br/><strong>" . $title . "</strong><br/><br/><div id='eventBody'><u>Description</u><br/>" . $desc . "</div><br/><u>Duration: </u><br/><strong>" . $duration . "</strong><br/><br/><u>Powered By: </u><br/><strong>" . $by . "</strong><br/><hr>" ;
		$count++ ;
	}
}else{
	$events .= "<h3>No Event in " . $showHead . "</h3><hr>" ;
}

echo $events ;

// echo "Day Count : " . $day_count ;
// echo "\nPRE Days : " . $pre_days ;
// echo "\nPOST Count : " . $post_days ;
// echo "\nCurr Day : " . $currDate ;
// echo "\nShow Month : " . $showmonth ;
// echo "\n Show Year : " . $showyear ;
?>