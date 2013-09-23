<?php
	ob_start();
	session_start();
  	require_once('resources/dbconfig.php');

	$deets = $_POST['deets'];
	$deets = preg_replace('#[^0-9/]#i', '', $deets);

	$events = '' ;
	$q = 'select `description`, `title`, `duration`, `by` from events where evdate="' . $deets . '"' ;
	$query = mysql_query($q) or die("Can not run query");
	$num_rows = mysql_num_rows($query);
	if($num_rows > 0){
		//$events .= '<div id="eventControl"><button onMouseDown="javascript:overlay();">Close</button><br/><br/><b> ' . $deets . '</b><br/><br/></div> ' ;
		$events .= "<br/><div id='eventControl pull-right'><input type='submit' name='close' value='Close' id='close' onClick='javascript:overlay();'></div><br/><b>Events on " . $deets . "</b><br/><hr/>" ;
		$count=1;
		while($row = mysql_fetch_array($query)){
			$desc = $row['description'];
			$title = $row['title'];
			$by = $row['by'];
			$duration = $row['duration'];
			$events .= "<ul><li><strong>Event #" . $count . "</strong></li></ul>" ;
			$events .= "<br/><u>Title: </u><br/><strong>" . $title . "</strong><br/><br/><div id='eventBody'><u>Description</u><br/>" . $desc . "</div><br/><u>Duration: </u><br/><strong>" . $duration . "</strong><br/><br/><u>Powered By: </u><br/><strong>" . $by . "</strong><br/><hr>" ;
			$count++ ;
		}
	}

	echo $events ;

?>