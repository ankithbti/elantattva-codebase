<?php
  session_start();
  $login_page="http://www.elantattva.com/admin.php";
  unset($_SESSION['userid']);
  //unset($_SESSION['password']);
  unset($_SESSION['email']);
  //call start page here
  header("Location: " . $login_page . "?success=You have Logged out successfully.");
?>