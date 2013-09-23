<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "UPCOMINGEVENTS" ;
  	include('baseHeader.html');
?>
<body onLoad="initialCalendar();" data-spy="scroll" data-target=".bs-docs-sidebar">


<?php
  include('baseNavigation.php');
?>

<?php 
	    $hm = "HHNT_1_0"; 
	    $hm2 = "HHNT_1_0"; 
	    include "$hm/hhnt.php";
?>

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row styledText">
	  	


	  	<div class="span7">
	  		<!-- <h2>Event Details</h2> -->
	        <div id="showEvents"></div>
	  	</div>

	  	<div class="span4 well">
		    <h4><i class="icon-calendar"></i> Our Event Calendar</h4>
	        <div id="showCalendar"></div>
	        <div id="overlay">
	          	<div id="events">
	          	</div>
			</div>
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<!-- <div class='container'>
	<div class="row-fluid marketing" align="justify">
	        <div class="span12" align="center">
	        	<h4><i class="icon-calendar"></i> Our Event Calendar</h4>
		        <div id="showCalendar"></div>
		        <div id="overlay">
		          	<div id="events">
		          	</div>
				</div>
	          

	        </div>
	</div>
</div> -->

<?php
	include('footer.php');
?>

</body>
</html>
