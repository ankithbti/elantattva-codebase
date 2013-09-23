<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "PRESS" ;
  	include('baseHeader.html');
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

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row styledText">

		<div class="span4">
	  		<div class="page-header">
	            <h1>Press Report in Dainik Jagran</h1>
	        </div>
		    <a href="resources/images/news/jagran2.jpg" target="_blank"><img src="resources/images/news/jagran2.jpg" class="img-rounded img-polaroid" /></a>
	  	</div>

	  	<div class="span4">
	  		<div class="page-header">
	            <h1>Press Report in Amar Ujala</h1>
	        </div>
		    <a href="resources/images/news/jagran1.jpg" target="_blank"><img src="resources/images/news/jagran1.jpg" class="img-rounded img-polaroid" /></a>
	  	</div>

	  	<div class="span4">
	  		<div class="page-header">
	            <h1>Our Media Banner</h1>
	        </div>
		    <a href="img/ads/Banner.jpg" target="_blank"><img src="img/ads/Banner.jpg" class="img-rounded img-polaroid" /></a>
	  	</div>



	  	<div class="span4">
	  		<div class="page-header">
	            <h1>Times of India Press</h1>
	        </div>
		    <a href="img/ads/Times of India AD.jpg" target="_blank"><img src="img/ads/Times of India AD.jpg" class="img-rounded img-polaroid" /></a>
	  	</div>

	  	<div class="span4">
	  		<div class="page-header">
	            <h1>Doon Classfied Press</h1>
	        </div>
		    <a href="img/ads/Doon Classfied AD.jpg" target="_blank"><img src="img/ads/Doon Classfied AD.jpg" class="img-rounded img-polaroid" /></a>
	        
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<?php
	include('footer.php');
?>


</body>
</html>



