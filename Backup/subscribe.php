<?php
	require_once('resources/dbconfig.php');
	error_reporting(E_ALL | E_WARNING | E_NOTICE);
	ini_set('display_errors', TRUE);
	flush();
	$back_page="http://www.elantattva.com/" ;
	date_default_timezone_set('UTC');
	$datetime = date('Y-m-d H:i:s') ;
	$LOG_START = $datetime . " :: subscribe.php :: " ;
	if(isset($_POST['email'])){
		$email = $_POST['email'] ;
		//Now check that email id is not already subscribed
		$query = "SELECT email from subscribers where email='$email'";
		$result = mysql_query($query) or trigger_error($LOG_START . " Query : " . $query . " Fails while validating that that email id is not already subscribed.");
		if(mysql_num_rows($result) == 0){
			//Not subscribed
			$query = "INSERT INTO subscribers(`email`, `date`) VALUES('$email', '$datetime')";
			$result=mysql_query($query) or trigger_error($LOG_START .  " Query : " . $query . " Fails while inserting the new subscriber details. ");
			if(mysql_affected_rows() == 1){
				//Row inserted successfully
				header("Location: " . $back_page . "?success=You have been subscribed successfully.&email=" . $email . "#subscribe");
				die('should have redirected by now');
			}else{
				header("Location:" . $back_page . "?error=Sorry!!!! Due to heavy traffic, your request has not been fullfilled. Try again.&email=" . $email . "#subscribe");
                mysql_close(); // Close the database connection
                die('should have redirected by now');
			}

		}else{
			header("Location:" . $back_page . "?warning=It seems that you have already subscribed.#subscribe");
            mysql_close(); // Close the database connection
            die('should have redirected by now');
		}

	}else{
		header("Location:" . $back_page . "?error=Something fisshy!!!!!. &email=" . $email . "#subscribe");
        mysql_close(); // Close the database connection
        die('should have redirected by now');
	}
?>