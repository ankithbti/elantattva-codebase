<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "REGISTERATION" ;
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
<div class="container">
<div class="row">
	<div class="span2">
	</div>
	<div class="span8">
		
		<?php
			if(isset($_GET['rerror'])){
		?>
		<div class="alert alert-error gap">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Oops!! </strong>
			<?php echo $_GET['rerror'] ; ?>
		</div>
		<?php
			}
		?>

		<?php
			if(isset($_GET['rsuccess'])){
		?>
		<div class="alert alert-success gap">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Congrats!! <?php if(isset($_GET['remail'])){ echo $_GET['remail'] ; }?> ! </strong>
			<?php echo $_GET['rsuccess'] ; ?>
		</div>
		<?php
			}
		?>
	</div>
	<div class="span2">
	</div>
</div><!-- row -->
</div>

<div class="coachingregisterpage1">
	<form action="oneononecoachingregister.php" method="post">
	<input type="hidden" name="rsubmitted" value="rsubmitted">
	<div class="container">
		<div class="row">
			<center>
				<span class="label label-inverse mynote">Note: <u>STRICT CONFIDENTIALITY</u> is assured for all personal information that you are sharing.</span>
			</center>
		</div>
		<br/>
		<div class="row registrationh2">
			<center>
				<h2>One on One Coaching Registration Form</h2>
			</center>
		</div>
		<br/>
		<!-- <div class="row">
			<div class="span3">
			</div>
			<div class="span5">
				<h3>Register today for one-on-one coaching</h3>
			</div>
			<div class="span4">
				<div class="closeregisteration"><a href="javascript:void();"><img src="resources/images/closebox.png"/></a></div>
			</div>
		</div> -->

		<div class="row">
			<div class="span2">
			</div>
			<div class="span4">
				<p>
					<?php 
						if(isset($_GET['name']) && strlen($_GET['name']) > 0) {
					?>
						Name [ Mandatory ]<br/><br/><input type="text" name="rname" placeholder="Your Name" required="required" value="<?php echo $_GET['name'] ; ?>"/>
					<?php
						}else{
					?>
						Name [ Mandatory ]<br/><br/><input type="text" name="rname" placeholder="Your Name" required="required" />
					<?php
						}
					?>
				</p>
				
				<p>
					<?php 
						if(isset($_GET['phone']) && strlen($_GET['phone']) > 0) {
					?>
						Phone [ Mandatory ]<br/><br/><input type="text" name="rphone" placeholder="Your Phone Number" required="required" value="<?php echo $_GET['phone'] ; ?>" />
					<?php
						}else{
					?>
						Phone [ Mandatory ]<br/><br/><input type="text" name="rphone" placeholder="Your Phone Number" required="required"/>
					<?php
						}
					?>
				</p>
				<p>
					<?php 
						if(isset($_GET['role'] ) && strlen($_GET['role']) > 0) {
					?>
						Role/Designation [ Optional ]<br/><br/><input type="text" name="rrole" placeholder="Your Role/Designation" value="<?php echo $_GET['role'] ; ?>" />
					<?php
						}else{
					?>
						Role/Designation [ Optional ]<br/><br/><input type="text" name="rrole" placeholder="Your Role/Designation" />
					<?php
						}
					?>
				</p>
			</div>
			<div class="span4">
				<p>
					<?php 
						if(isset($_GET['email'] ) && strlen($_GET['email']) > 0) {
					?>
						Email [ Mandatory ]<br/><br/><input type="email" name="remail" placeholder="Your Email" required="required" value="<?php echo $_GET['email'] ; ?>" />
					<?php
						}else{
					?>
						Email [ Mandatory ]<br/><br/><input type="email" name="remail" placeholder="Your Email" required="required"/>
					<?php
						}
					?>
					
				</p>
				<p>
					<?php 
						if(isset($_GET['org'] ) && strlen($_GET['org']) > 0) {
					?>
						Company/Org./Inst. [ Optional ]<br/><br/><input type="text" name="rorg" placeholder="Name of Company/Org./Inst." value="<?php echo $_GET['org'] ; ?>" />
					<?php
						}else{
					?>
						Company/Org./Inst. [ Optional ]<br/><br/><input type="text" name="rorg" placeholder="Name of Company/Org./Inst." />
					<?php
						}
					?>
					
				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>Top 3 goals / aspirations you aspire to achieve in life ? [ Optional ]</p>
				<p>
					
					<?php 
						if(isset($_GET['goal']) && strlen($_GET['goal']) > 0) {
					?>
						<textarea name="rgoal">
					<?php
						echo trim($_GET['goal']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rgoal"></textarea>
					<?php
						}
					?>
					
				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>What do you think are the major hindrances (mention 3) which if removed will take you closer to realizing your goals ? [ Optional ]</p>
				<p>

					<?php 
						if(isset($_GET['hinder']) && strlen($_GET['hinder']) > 0) {
					?>
						<textarea name="rhinder">
					<?php
						echo trim($_GET['hinder']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rhinder"></textarea>
					<?php
						}
					?>

				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>How do you think the Coaching Program will help you towards achieving or making progressing towards your goals ? [ Optional ]</p>
				<p>

					<?php 
						if(isset($_GET['help']) && strlen($_GET['help']) > 0) {
					?>
						<textarea name="rhelp">
					<?php
						echo trim($_GET['help']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rhelp"></textarea>
					<?php
						}
					?>

				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>Are there any personal qualities that you are seeking to acquire/strengthen in order to achieve what you are aspiring for ? [ Optional ]</p>
				<p>

					<?php 
						if(isset($_GET['quality']) && strlen($_GET['quality']) > 0) {
					?>
						<textarea name="rquality">
					<?php
						echo trim($_GET['quality']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rquality"></textarea>
					<?php
						}
					?>
				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>How do you think Stress is impacting your quest to achieve what you are aspiring for ? [ Optional ]</p>
				<p>

					<?php 
						if(isset($_GET['stress']) && strlen($_GET['stress']) > 0) {
					?>
						<textarea name="rstress">
					<?php
						echo trim($_GET['stress']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rstress"></textarea>
					<?php
						}
					?>

				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<p>Are you on any medication for psychosomatic ailments/conditions? If so, please specify with details. [ Optional ]</p>
				<p>

					<?php 
						if(isset($_GET['medication']) && strlen($_GET['medication']) > 0) {
					?>
						<textarea name="rmedication">
					<?php
						echo trim($_GET['medication']) ;
					?>
						</textarea>
					<?php
						}else{
					?>
						<textarea name="rmedication"></textarea>
					<?php
						}
					?>

				</p>
			</div>
			<div class="span2">
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<label for="security_code" accesskey="S">Security Code</label>-->
                <input id="security_code" name="security_code" type="text" placeholder="Enter the captcha image text" required="required"/>
			</div>
			<div class="span2">
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="span2">
			</div>
			<div class="span8">
				<input class="btn btn-info btn-large fill-width" type="submit" name="register" value="Register"><br/><br/>
			</div>
			<div class="span2">
			</div>
		</div>
		

	</div><!-- container -->
	</form>
</div>

<?php
	include('footer.php');
?>

</body>
</html>