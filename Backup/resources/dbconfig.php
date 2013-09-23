<?php
	/*  Server Database */
	DEFINE('DBUSER','fitiedc1_common');
	DEFINE('DBPW','onlinejusthost007@');
	DEFINE('DBHOST','localhost');
	DEFINE('DBNAME','fitiedc1_elantattva');
	
	// Local Database 
	// DEFINE('DBUSER','root');
	// DEFINE('DBPW','saring');
	// DEFINE('DBHOST','localhost');
	// DEFINE('DBNAME','arrivu');
	// DEFINE('ARRIVU_CONTACT_MAILING_LIST','ankithbti007@gmail.com');
	
	DEFINE('MAIN_PAGE_URL','http://www.elantattva.com');
	if($dbc = mysql_connect(DBHOST, DBUSER, DBPW)){
		if(!mysql_select_db(DBNAME)){
			trigger_error("Could not select the database" . mysql_errno());
			exit();
		}
	}else{
		trigger_error("Could not connect to MYSQL");
		exit();
	}
	function escape_data($data){
		if(function_exists('mysql_real_escape_string')){
			global $dbc;
			$data = mysql_real_escape_string(trim($data),$dbc);
			$data = strip_tags($data);
		}else{
			$data = mysql_escape_string(trim($data));
			$data = strip_tags($data);			
		}
		return $data ;
	}
?>