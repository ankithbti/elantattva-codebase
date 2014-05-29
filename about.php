<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "ABOUT" ;
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

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row styledText">
	  	<div class="span3 bs-docs-sidebar">
		    <ul class="nav nav-list bs-docs-sidenav">
		      <li class="active"><a href="#aboutus"><i class="icon-chevron-right"></i> <i class="icon-screenshot"></i> About Us</a></li>
		      <li><a href="#vision"><i class="icon-chevron-right"></i> <i class="icon-screenshot"></i> Our Vision</a></li>
		      <li><a href="#principles"><i class="icon-chevron-right"></i> <i class="icon-flag"></i> Core Principles</a></li>
		      <li><a href="#services"><i class="icon-chevron-right"></i> <i class="icon-magnet"></i> Our Services</a></li>
		      <!-- <li><a href="#founder"><i class="icon-chevron-right"></i> <i class="icon-briefcase"></i> Founder</a></li> -->
		    </ul>
	  	</div>


	  	<div class="span9">

	  		<!-- 
	        ================================================== -->
	        <section id="aboutus">
	          <div class="page-header">
	            <h1>About Us</h1>
	          </div>
	          <p>Elan Tattva literally stands for the principles of enthusiasm, confidence, panache and style.</p>
			  <p>Our primary focus is in the area of Leadership coaching and training.</p>
			  <p>We have a distinguished team of Coaches and Trainers with extensive Corporate/Industry experience.</p>
			  <p>We are located in Bangalore.</p>
			  </p>
	        </section>

	  		
	  		
	        <!-- 
	        ================================================== -->
	        <section id="vision">
	          <div class="page-header">
	            <h1>Our Vision</h1>
	          </div>
	          <p>Our Vision is to enable organizations and individuals to achieve their true potential by nurturing fine leadership and professional excellence at all levels.</p>
	        </section>

	        <!--
	        ================================================== -->
	        <section id="principles">
	          <div class="page-header">
	            <h1>Core Principles</h1>
	          </div>
	          <p><strong>&raquo;</strong> Enable people to leverage strengths &amp; minimize weaknesses.</p>
	          <p><strong>&raquo;</strong> Develop &amp; foster high performing team culture.</p>
	          <p><strong>&raquo;</strong> Support employees to effectively align with shared organizational vision &amp; goals.</p>
	          <p><strong>&raquo;</strong> Superior Workplace Culture &amp; Employee Engagement :</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> Nurturing a culture of positive acknowledgment in teams.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> Increase Motivation for Self-Driven Learning &amp; Development.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> Value Addition as a core tenet at individual &amp; team levels.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> Excellent Work-Life Balance.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> Driving Performance with Social &amp; Emotional Intelligence.</p>

	        </section>


	        <!--
	        ================================================== -->
	        <section id="services">
	          <div class="page-header">
	            <h1>Our Services</h1>
	          </div>
	          <p><strong>&raquo;</strong> Training &amp; Coaching Services - aimed at multiple levels of Organizations &amp; Institutions.</p>
	          <p><strong>&raquo;</strong> We conduct programs for Corporates, Educational Institutions, NGOs.</p>
	          <p><strong>&raquo;</strong> We also conduct open workshops for general public.</p>
	          <p><strong>&raquo;</strong> Training &amp; Coaching Services for Corporate Organizations :</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> We offer Programs for :</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8211;</strong> New Recruits (0-1 yr exp)</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8211;</strong> Executives/Professionals (1-6 yrs exp &amp; beyond)</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8211;</strong> Middle Management (7-15 yrs exp)</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8211;</strong> Senior Management (15+ yrs exp)</p>
	          
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> To deliver their personal best &amp; contribute to Organization&#8216;s success.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> We undertake both Leadership &amp; soft skills training.</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#186;</strong> All courses are customized to suit client requirements.</p>

	        </section>

	        <!--
	        ================================================== -->
	        <!-- <section id="founder">
	          <div class="page-header">
	            <h1>Founder</h1>
	          </div>
	          <p><strong>Suresh Sivaraman</strong> has done his MBA from IIM Bangalore (PGSEM) and B.Tech from Govt College of Engineering, Trivandrum. He has worked in the IT industry for nearly 14 yrs, with 7 years in various Management positions in India and Europe. He has handled roles of Delivery Manager, Senior Project Manager, Onsite Manager for large programs in the IT industry.
		          	He is a certified NLP trainer (ANLP India), Certified Advanced Life Coach, Reiki Master. His passions include Inter Cultural Management, People and Process Management, Organizational Development, NLP, Transactional Analysis, Life Coaching, Reiki, Meditation, Tai chi, Yoga, New Age Music. He has conducted workshops and sessions in Bangalore on personal empowerment, law of attraction, meditations, one-one coaching.</p>

	        </section> -->
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<?php
	include('footer.php');
?>


</body>
</html>



