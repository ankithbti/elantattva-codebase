<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('headerHome.html');
?>
<body>

<div class="container">
<?php
  include('headernavigation.php');
?>

<?php 
	    $hm = "HHNT_1_0"; 
	    $hm2 = "HHNT_1_0"; 
	    include "$hm/hhnt.php";
?>

<div id="container">
	<div id="example">
		<div id="slides">
			<div class="slides_container">
				<a href="#" title="" target="_blank"><img src="img/slide-1.jpg" width="570" height="270" alt="Slide 1"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-6.jpg" width="570" height="270" alt="Slide 6"></a>
				<a href="#" title="" target="_blank"><img src="img/slide-7.jpg" width="570" height="270" alt="Slide 7"></a>
			</div>
			<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
			<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
		</div>
		<img src="img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
	</div>
	
</div>

<hr>	

<div class="row lowersection" align="justify">
	<div class="span2"></div>
	<div class="span8" align="center">
		<div class='thoughtofday'>
			&#8220; Go confidently in the direction of your Dreams. Live the life you've imagined! &#8221;<br/>
			<span>&#126; By Henry David Thoreau &#126;</span>
		</div>
	</div>
	<div class="span2"></div>
</div>

<hr>	

<div class="row" align="center">
	<div class="span12">
				
		<div class="well-subscribe">

				<?php
					if(isset($_GET['error'])){
				?>
				<div class="alert alert-error gap">
					<button type="button" class="close" data-dismiss="alert">X</button>
					<strong>Oops!! </strong>
					<?php echo $_GET['error'] ; ?>
				</div>
				<?php
					}
				?>
				<?php
					if(isset($_GET['success'])){
				?>
				<div class="alert alert-success gap">
					<button type="button" class="close" data-dismiss="alert">X</button>
					<strong>Welcome Aboard <?php if(isset($_GET['email'])){ echo $_GET['email'] ; }?> ! </strong>
					<?php echo $_GET['success'] ; ?>
				</div>
				<?php
					}
				?>

				<?php
					if(isset($_GET['warning'])){
				?>
				<div class="alert alert-info gap">
					<button type="button" class="close" data-dismiss="alert">X</button>
					<strong>Hmmmmm! </strong>
					<?php echo $_GET['warning'] ; ?>
				</div>
				<?php
					}
				?>
                    <h4>Subscribe to our Newsletter !!!!</h4>
                    <!-- <h4>Get updates by email:</h4> -->
                    <form action="subscribe.php" method="post">
                    	<?php
                    		if(isset($_GET['success'])){
                    	?>
                        <input type="email" name="email" class="span3" required="required" placeholder="Email address" />
                        <?php
                        	}else{
                        ?>
                        <input type="email" name="email" class="span3" required="required" placeholder="Email address" value="<?php if(isset($_GET['email'])){ echo $_GET['email'] ; } ?>" />
                        <?php
                        	}
                        ?>
                        <br/>
                        <input class="btn btn-primary fill-width" type="submit" name="subscribe" value="Subscribe">
                    </form>
        </div>
	</div>
</div>




<br/><br/>

<hr>	

<div class="footer">
    <p>&copy; Elan Tattva 2013</p>
</div>

</div> <!-- /container -->

</body>
</html>



