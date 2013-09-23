<?php

    ob_start();
    session_start();
    require_once('resources/dbconfig.php');

    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);
    //flush();
    ini_set('allow_url_fopen', "1");
    date_default_timezone_set('UTC');
    $curr_date = date(DATE_RFC822);
    $datetime = date('Y-m-d H:i:s') ;
    $LOG_START = $datetime . " :: contactsubmit.php :: " ;
    //DEFINE('CONTACT_MAILING_LIST','elantattva@gmail.com,ankithbti007@gmail.com,mailtosureshsivaraman@gmail.com');
    
    $login_page="http://www.elantattva.com/admin.php";
  // If form submitted or not
  if(isset($_POST['submitted'])){
    $e=$_POST['email'];
    $p=$_POST['passwd'];

    echo $e . "<br/>" ;
    echo $p . "<br/> " ;

    
    //Check pasword is valid or not
    //$query = "SELECT email, passwd, active FROM users WHERE email='$e' AND passwd=SHA('$p')";
    $query = "SELECT name, email, password FROM users WHERE email='$e' AND password='$p' AND role='ADMIN' ";
        $result = mysql_query ($query) or trigger_error("Query fails. Contact us to report the issue.");
        
        if (mysql_affected_rows() == 1){
        $row = mysql_fetch_array ($result, MYSQL_NUM);
        mysql_free_result($result);
        // If they haven’t activated the account redirect
        //Account is active
        $_SESSION['email'] = $row[1];
        $_SESSION['userid'] = $e ;
        $_SESSION['name'] = $row[0] ;
        // Reset session id for security
        session_regenerate_id();
        mysql_close(); // Close the database connection.
        // Redirect the user to the login successful page
        header("Location: " . $login_page . "?success=Welcome Aaka, Here you go.&email=" . $e);
        }else{
        //No match was made
        //Check is email id is registeterd
        $query1 = "SELECT email, password FROM users WHERE email='$e' and role='ADMIN' ";
        $result1 = mysql_query ($query1) or trigger_error("Query fails. Contact us to report the issue.");
        if (mysql_affected_rows() == 1){
            //Email id is registered
            mysql_close(); // Close the database connection
            header("Location: " . $login_page . "?error=Wrong password entered. Try again.&email=" . $e);
        }else{
            //Email id is not registered
            mysql_close(); // Close the database connection
            header("Location: " . $login_page . "?error=Email id entered is not registered as admin. Please contact us to become one: <a href=contact.php>Click here</a>");
        }
        }
    
  }else{
      //Form not submitted
      mysql_close(); // Close the database connection
      header("Location: " . $login_page . "?error=Submit the sign in form.");
  }
?>