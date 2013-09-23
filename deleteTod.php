<?php
	require_once('resources/dbconfig.php');
	error_reporting(E_ALL | E_WARNING | E_NOTICE);
	ini_set('display_errors', TRUE);
	flush();
	date_default_timezone_set('UTC');
	$datetime = date('Y-m-d H:i:s') ;
	$LOG_START = $datetime . " :: submitTod.php :: " ;
	
	if(isset($_POST['recordToDelete'])){
		$id = $_POST['recordToDelete'] ;
		//Insert that thought into tod table
		$query = "delete from `tod` where id='$id' ";
		$result=mysql_query($query) or trigger_error($LOG_START .  " Query : " . $query . " Fails while inserting the new tod details. ");
		if(mysql_affected_rows() == 1){
			echo "<p><font color='green'>Thought has been deleted properly.</font></p>" ;
		}else{
			echo " <p><font color='red'>Sorry!!!! Thought was not deleted properly. Try again.</font></p>" ;
		}		
	}else{
		echo "<p><font color='red'>Something fisshy happens !!!!!. Try again.<font color='red'></p>" ;
	}
	mysql_close(); // Close the database connection
?>