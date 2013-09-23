<?php

$showmonth = $_POST['showmonth'];
$showyear = $_POST['showyear'];

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

// echo "Day Count : " . $day_count ;
// echo "\nPRE Days : " . $pre_days ;
// echo "\nPOST Count : " . $post_days ;
// echo "\nCurr Day : " . $currDate ;
// echo "\nShow Month : " . $showmonth ;
// echo "\n Show Year : " . $showyear ;
?>

<div id='calendar_wrap'>
	<div class='title_bar'>
		<div class='previous_month'><input class="btn btn-small" name="myBtn" type="submit" value=" << " onClick="javascript:last_month();" /></div>
		<div class='show_month'><?php echo $month_name . ' ' . $showyear ; ?></div>
		<div class='next_month'><input class="btn btn-small" name="myBtn" type="submit" value=" >> " onClick="javascript:next_month();" /></div>
		<div class='clear'></div>
	</div>
	<br/>
	<div class='week_days'>
		<div class='days_of_week'>Sun</div>
		<div class='days_of_week'>Mon</div>
		<div class='days_of_week'>Tue</div>
		<div class='days_of_week'>Wed</div>
		<div class='days_of_week'>Thur</div>
		<div class='days_of_week'>Fri</div>
		<div class='days_of_week'>Sat</div>
		<div class='clear'></div>
	</div>
	<div class='clear'></div>
	<?php
		/* Prev Month Filler Days */
		if($pre_days  != 0){
			for($i = 0 ; $i < $pre_days ; $i++){
	?>
				<div class='non_cal_day'></div>


	<?php
			}//for
		}//if

		/* Curr Month */

		//Connect to database
		require_once('resources/dbconfig.php');
		for($i = 1 ; $i <= $day_count ; $i++){
			//Get Event Logic
			$date = $showmonth . '/' . $i . '/' . $showyear ;
			$q = 'SELECT id FROM events WHERE evdate="' . $date . '"' ;
			$query = mysql_query($q) ;
			$num_rows = mysql_num_rows($query);
			if($num_rows > 0){
				// $event = "<input type='submit' name='$date' value='E' id='$date' onClick='javascript:show_events(this);'>"; 
				$event = "<span class='eventIcon' id='$date'><i class='icon-calendar'></i></span>";
			}
			if($i == $currDate){

	?>
			<div class='cal_today'>

	<?php

			}else if($num_rows != 0){

	?>
			<div class='cal_day_with_event'>
	<?php
		}else{
	?>
			<div class='cal_day'>

	<?php
			}
	?>
				<div class='day_heading'><?php echo ($i) ; ?></div>
	<?php
			//Show Event button
			if($num_rows != 0 ){
	?>
				<div class='openings'><br/><?php echo $event ; ?></div>

	<?php
			}
			//ENd button

	?>
			</div>

	<?php
		}//for

		/* Next Month */
		if($post_days != 0){
			for($i = 0 ; $i < $post_days ; $i++){
	?>
				<div class='non_cal_day'></div>

	<?php
			}
		}

	?>

</div>

<?php

?>