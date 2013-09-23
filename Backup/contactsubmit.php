<?php
	require_once('resources/dbconfig.php');
	error_reporting(E_ALL | E_WARNING | E_NOTICE);
	ini_set('display_errors', TRUE);
	//flush();
	$back_page="contact.php" ;
	ini_set('allow_url_fopen', "1");
	date_default_timezone_set('UTC');
    $curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;
	$LOG_START = $datetime . " :: contactsubmit.php :: " ;
    DEFINE('CONTACT_MAILING_LIST','elantattva@gmail.com,ankithbti007@gmail.com,mailtosureshsivaraman@gmail.com');
	if(isset($_POST['submitted'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'] ;

		$body = "<font color='gray' size='3px' face='tahoma'>";
        $body .= "Hi Admin" . ",<br/><br/>Greetings from Elan Tattva Automated System.<br/><br/>";
        $body .= " This is to inform you that person with following details, contacted Elan Tattva:<br/> " ;
        $body .= "<ul><li>Name:<b> " . $name . "</b></li><li>Email:<b> " . $email . "</b></li></ul>" ;
        $body .= "<br/>Message, that he wants to communicate is as mentioned below:<br/>";
        $body .= "<b>&#8220;" . $message . "&#8221;</b>" ;
        
        $body .= "<br/><br/>" ;
        $body .= "Thanks & Regards<br/><b>Elan Tattva</b><br/><a href='http://www.elantattva.com'>www.elantattva.com</a>";
        $body .= "</font>" ;
        $from_address = "noreply@elantattva.com";
        $to = CONTACT_MAILING_LIST ;
        $subject = 'Someone contacted Elan Tattva via online contact form at ' . $curr_date ;
        $from_name = "Elan Tattva" ;
        //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
        $headers = "MIME-Version: 1.0\r\n"
          ."Content-Type: text/html\r\n"
          ."Content-Transfer-Encoding: 8bit\r\n"
          ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
          ."X-Mailer: PHP/". phpversion();
        mail($to, $subject, $body, $headers, "-f $from_address");
        header("Location:" . $back_page . "?success=Your message has been successfully sent. We will contact you soon.&email=" . $email);
        mysql_close(); // Close the database connection
        die('should have redirected by now');
	}else{
		header("Location:" . $back_page . "?error=Something fisshy!!!!!.");
        mysql_close(); // Close the database connection
        die('should have redirected by now');
	}
?>