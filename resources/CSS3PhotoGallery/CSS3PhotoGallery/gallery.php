<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('baseHeader.html');
  	require_once('resources/dbconfig.php');
?>
<body>


<?php
  include('baseNavigation.php');
?>

<?php 
	    $hm = "HHNT_1_0"; 
	    $hm2 = "HHNT_1_0"; 
	    include "$hm/hhnt.php";
?>

<div class='container'>
	<div class="row">
		
		<div class="span4 fill">
		</div>

		<div class="span4 fill">
		</div>

		<div class="span4 fill">
		</div>

		
		
	</div><!--row-->
</div><!-- container -->

<?php
	include('footer.php');
?>

</body>
</html>



