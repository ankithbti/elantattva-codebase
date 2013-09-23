<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "UNDER CONSTRUCTION" ;
  	include('baseHeader.html');
?>
<body data-spy="scroll" data-target=".bs-docs-sidebar">


<?php
  include('baseNavigation.php');
?>

<div class="jumbotron">
    <h1>ELAN TATTVA</h1>
    	<p>The pursuit of excellence by harnessing the essence of panache and verve</p>
</div>

<center>
	<div class="hero-unit">
	  <h1>Under Development</h1>
	  <p></p>
	  	<div class="alert alert-error">
  			We are trying to imrove your experience !!!!
	  	</div>
	  </p>
	</div>
</center>


<?php
	include('footer.php');
?>

</body>
</html>



