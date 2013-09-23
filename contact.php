<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "CONTACT" ;
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

<div class='container'>
	<div class="row" align="justify">
	        <div class="span2">
	        </div>
	        <div class="span3">

	          <h4><i class="icon-briefcase"></i> Contact Us @</h4>
	          <p><strong>Mobile 1: </strong> +91 99722 97259</p>
	          <p><strong>Mobile 2: </strong> +91 96208 10505</p>
	          <p><strong>Email: </strong> <a href='mailto:elantattva@gmail.com'><u>elantattva@gmail.com</u></a></p>
	        </div>

	        <div class="span7">

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
					<strong>Congrats!! <?php if(isset($_GET['email'])){ echo $_GET['email'] ; }?> ! </strong>
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
					<strong><?php if(isset($_GET['name'])){ echo $_GET['name'] ; } ?> ! </strong>
					<?php echo $_GET['warning'] ; ?>
				</div>
				<?php
					}
				?>
			
				<h4><i class="icon-pencil"></i> We love to hear from you</h4>
				<form action="contactsubmit.php" method="post">
					<input type="hidden" name="submitted" value="submitted">
				<div class="field">
					Name<sup>*</sup><br/>
					<input type="text" name="name" class="span3" required="required" value="<?php if(isset($_GET['name'])){ echo $_GET['name'] ; } ?>" placeholder="Your Name" />
				</div>
				<div class="field">
					Email<sup>*</sup><br/>
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
				</div>
				<div class="field">
					Message<sup>*</sup><br/>
					<?php 
						if(isset($_GET['message']) && strlen($_GET['message']) > 0) {
					?>
						<textarea id='messagebox' name="message" placeholder="Your message" required="required">
					<?php
						echo trim($_GET['message']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea id='messagebox' name="message" placeholder="Your message" required="required"></textarea>
					<?php
						}
					?>

				</div>


				<div class="field">
	                	<img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                	<input id="security_code" name="security_code" type="text" placeholder="Enter the captcha image text" required="required"/>
				</div>
				<br><br>

				<div class="submitfield">
					<sup>*</sup> indicates a required field&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input style="cursor:pointer" class='btn btn-large btn-info' type="submit" value="Send">
				</div>

	        </div>

	        
	</div>
</div>

	

<?php
	include('footer.php');
?>


</body>
</html>



