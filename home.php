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

<div class='bottomborderooc'>
<div class='container'>
	<div class="row">
		
		
		<div class="span6" align='center'>
			<div class='logoImage'>
				<img src='images/logo_new.png'/>
			</div>
		</div>

		<div class="span4" align='center'>
			<!-- <img src='handshake.jpg' style="margin-left:10px;height:210px;width:300px;"> -->
			<div class="registerforooc">
				<h2>One on One Coaching</h2>
				<p>Join for a better tomorrow.</p>
				<!-- <p class="oneononecoachingregister"><a href="javascript:void();">Click to Register</a></p> -->
				<div class="bottomsec"><p><a href="registerooc.php">Click to Register</a></p></div>
				<div class="bottomsec"><p><a target="_blank" href="resources/Elan Tattva OnetoOne Coaching Brochure.pdf">One One Coaching Overview</a></p></div>
			</div>
		</div>
		<div class="span2">
			
		</div>
	</div>
</div>
</div>
<div class='container'>
	<div class="row">

		<div class="span6">


			<!-- Image Slider -->
			<div id="myimageslider">

				<div class="loaderbeforeslides">
					<!-- <div class="imageSlider">
						<h4>Image Slider will appear here. We are working on it.</h4>
						<p><img src=""/></p>
					</div> -->
				</div>

				<a href="javascript:void(0)" class="showimage">
					<img class="img-rounded" src="resources/images/gallery/emoInt4.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt2.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt3.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt1.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt5.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt6.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>
				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/emoInt7.jpg" alt="Emotional Intelligence for Success workshop" alt="" title="Emotional Intelligence for Success workshop" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/goal1.jpg" alt="Goal planning session" alt="" title="Goal planning session" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/goal2.jpg" alt="Goal session" alt="" title="Goal planning session" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/goal3.jpg" alt="Goal strategy session" alt="" title="Goal planning session" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/goal4.jpg" alt="Goal planning" alt="" title="Goal planning session" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/dun3.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/dun5.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/dun1.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/dun4.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/dun2.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang1.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang2.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang3.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang4.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang5.jpg" alt="Grass Blades" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang6.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				<a href="javascript:void(0)">
					<img class="img-rounded" src="resources/images/gallery/bang7.jpg" alt="" alt="" title="" width="100%" height="70%" rel=""/>
				</a>

				

				<!-- <div class="mycaption"><div class="mycontent"></div></div> -->


			</div>
			<div class="clearall"></div>


			<!-- <div class="imageSlider">
				<h4>Image Slider will appear here. We are working on it.</h4>
				<p>Check out our <a href="gallery.php">Gallery</a></p>
			</div> -->
		</div><!-- span9 -->
		<div class='span6'>
			<div style="width:90%; position: relative ;">
				<div class='subtagline'>
					<h4>Experts in <span class='label label-info' style='font-size: 17.5px; line-height: 20px; padding-bottom: 5px;'>Coaching</span>, 
					<span class='label label-warning' style='font-size: 17.5px; line-height: 20px; padding-bottom: 5px;'>Training</span> and 
					<span class='label label-success' style='font-size: 17.5px; line-height: 20px; padding-bottom: 5px; margin-top:3px;'>Motivational Speaking</span></h4>
				</div>
			</div>
			
		</div>
		<div class='clearBoth'></div>
	</div><!--row-->
</div><!-- container -->



<div class="row jumbotron1" align="center">
	<div class='container'>
		<div class='thoughtofday'>
			<?php
				$thought = '' ;
				$whom = '' ;
				$query = "SELECT thought, who FROM tod ORDER BY date DESC LIMIT 1 ";
				$result = mysql_query ($query) or trigger_error("Query fails. Contact us to report the issue.");
				if (mysql_affected_rows() == 1){
					$row = mysql_fetch_array ($result, MYSQL_NUM);
					$thought = $row[0] ;
					$whom = $row[1] ;
					mysql_free_result($result);
					mysql_close(); // Close the database connection.
				}
			?>
			<!--&#8220; Go confidently in the direction of your Dreams. Live the life you've imagined! &#8221;<br/>-->
			 &#8220;&nbsp;&nbsp;<?php echo $thought ; //&#8220; ?>&nbsp;&nbsp;&#8221;<br/>
			<!-- <span class='pull-right'><i>&#126; By Henry David Thoreau &#126;</i></span> -->
			<span class='pull-right'><i>&#126; By <?php echo $whom ; ?> &#126;</i></span>
			<div class='clearBoth'></div>
		</div>
	</div>
	<div class='clearBoth'></div>
</div>

<br/>
<div class="row styledText" align="center">
	<div class="span2"></div>
	<div class="span6" align="justify">
		<p class='moveDown'>The pursuit of excellence demystified. We welcome you to join us in this amazing exploration of the pure essence of panache and verve, so vital to the success of your goals and dreams.</p>
	</div>
	<div class="span4 well">
				
		<div class="well-subscribe" id="subscribe">

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
                    <h4>Subscribe to our Newsletter</h4>
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
                        <input class="btn btn-success fill-width" type="submit" name="subscribe" value="Subscribe">
                    </form>
        </div>
	</div>
</div>

<?php
	include('footer.php');
?>

</body>
</html>