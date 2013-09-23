<?php
	require_once('resources/dbconfig.php');
	error_reporting(E_ALL | E_WARNING | E_NOTICE);
	ini_set('display_errors', TRUE);
	//flush();
	$back_page="registerooc.php" ;
	ini_set('allow_url_fopen', "1");
	date_default_timezone_set('UTC');
    $curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;
	$LOG_START = $datetime . " :: registerooc.php :: " ;
    //DEFINE('CONTACT_MAILING_LIST','elantattva@gmail.com,ankithbti007@gmail.com,mailtosureshsivaraman@gmail.com');
    DEFINE('CONTACT_MAILING_LIST','ankithbti007@gmail.com');
	if(isset($_POST['rsubmitted'])){
		$name = $_POST['rname'];
		$email = $_POST['remail'];
		$phone = $_POST['rphone'] ;
        $org = $_POST['rorg'] ;
        $role = $_POST['rrole'] ;
        $goal = $_POST['rgoal'] ;
        $hinder = $_POST['rhinder'] ;
        $help = $_POST['rhelp'] ;
        $quality = $_POST['rquality'] ;
        $stress = $_POST['rstress'] ;
        $medication = $_POST['rmedication'] ;

		$body = "<font color='gray' size='3px' face='tahoma'>";
        $body .= "Hi Admin" . ",<br/><br/>Greetings from Elan Tattva Automated System.<br/><br/>";
        $body .= " This is to inform you that person with following details, has registered for One-on-One coaching in Elan Tattva:<br/> " ;
        $body .= "<ul><li>Name:<b> " . $name . "</b></li><li>Email:<b> " . $email . "</b></li><li>Phone:<b> " . $phone . "</b></li><li>Company:<b> " . $org . "</b></li><li>Role:<b> " . $role . "</b></li></ul>" ;
        $body .= "<br/><br/>Question : Top 3 goals / aspirations you aspire to achieve in life ?<br/>";
        $body .= "Answer: <b>&#8220;" . $goal . "&#8221;</b>" ;
        $body .= "<br/><br/>Question : What do you think are the major hindrances (mention 3) which if removed will take you closer to realizing your goals ?<br/>";
        $body .= "Answer: <b>&#8220;" . $hinder . "&#8221;</b>" ;
        $body .= "<br/><br/>Question : How do you think the workshop might help you towards achieving or making progressing towards your goals ?<br/>";
        $body .= "Answer: <b>&#8220;" . $help . "&#8221;</b>" ;
        $body .= "<br/><br/>Question : Are there any personal qualities that you are seeking to acquire/strengthen in order to achieve what you are aspiring for ?<br/>";
        $body .= "Answer: <b>&#8220;" . $quality . "&#8221;</b>" ;
        $body .= "<br/><br/>Question : How do you think Stress is impacting your quest to achieve what you are aspiring for ?<br/>";
        $body .= "Answer: <b>&#8220;" . $stress . "&#8221;</b>" ;
        $body .= "<br/><br/>Question : Are you on any medication for psychosomatic ailments/conditions? If so, please specify with details.<br/>";
        $body .= "Answer: <b>&#8220;" . $medication . "&#8221;</b>" ;
        
        $body .= "<br/><br/>" ;
        $body .= "Thanks & Regards<br/><b>Elan Tattva</b><br/><a href='http://www.elantattva.com'>www.elantattva.com</a>";
        $body .= "</font>" ;
        $from_address = "noreply@elantattva.com";
        $to = CONTACT_MAILING_LIST ;
        $subject = 'Someone registered for One-on-One Coaching in Elan Tattva via online at ' . $curr_date ;
        $from_name = "Elan Tattva" ;
        //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
        $headers = "MIME-Version: 1.0\r\n"
          ."Content-Type: text/html\r\n"
          ."Content-Transfer-Encoding: 8bit\r\n"
          ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
          ."X-Mailer: PHP/". phpversion();
        mail($to, $subject, $body, $headers, "-f $from_address");
        header("Location:" . $back_page . "?rsuccess=Your registration request has been successfully received. We will contact you soon.&email=" . $email);
        mysql_close(); // Close the database connection
        die('should have redirected by now');
	}else{
		header("Location:" . $back_page . "?rerror=Something fisshy!!!!!.");
        mysql_close(); // Close the database connection
        die('should have redirected by now');
	}
?>