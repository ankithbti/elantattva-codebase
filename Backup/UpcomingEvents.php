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

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row styledText">
	  	<div class="span3">
		    <h4><i class="icon-calendar"></i> Our Event Calendar</h4>
	        <div id="showCalendar"></div>
	        <div id="overlay">
	          	<div id="events">
	          	</div>
			</div>
	  	</div>


	  	<div class="span9">
	  		
	        
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<div class='container'>
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
</div>

<?php
	include('footer.php');
?>

</body>
</html>
