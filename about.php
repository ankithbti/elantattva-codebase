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
		      <li><a href="#principles"><i class="icon-chevron-right"></i> <i class="icon-screenshot"></i> Our Principles</a></li>
		      <li><a href="#mission"><i class="icon-chevron-right"></i> <i class="icon-flag"></i> Our Mission</a></li>
		      <li><a href="#motive"><i class="icon-chevron-right"></i> <i class="icon-magnet"></i> Our Motive</a></li>
		      <li><a href="#offerings"><i class="icon-chevron-right"></i> <i class="icon-road"></i> Our Offerings</a></li>
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
	          <p>Elan Tattva literally stands for the principles of enthusiasm, confidence, panache and style.<br/>
				The company is co-founded by a team with extensive prior Corporate/Industry experience.<br/>
				Located in Bangalore, we offer a wide variety of programs and workshops that creatively collaborates the rich traditional ideas of the East with the modern outlook of the West, with the goal of Promoting health, happiness, excellence and well-being through the mind-body connection.
			  </p>
	        </section>

	  		
	  		
	        <!-- 
	        ================================================== -->
	        <section id="principles">
	          <div class="page-header">
	            <h1>Our Principles</h1>
	          </div>
	          <p>Elan Tattva literally stands for the principles of enthusiasm, confidence, panache and style.</p>
	        </section>

	        <!--
	        ================================================== -->
	        <section id="mission">
	          <div class="page-header">
	            <h1>Our Mission</h1>
	          </div>
	          <p>The pursuit of excellence demystified. We welcome you to join us in this amazing exploration of the pure essence of panache and verve, so vital to the success of your goals and dreams.</p>

	        </section>


	        <!--
	        ================================================== -->
	        <section id="motive">
	          <div class="page-header">
	            <h1>Our Motive</h1>
	          </div>
	          <p>
	          	We integrate tenets and frameworks from Yoga, psychology, NLP, Mindfulness, Martial Arts and other disciplines in the design of our portfolio of programs, workshops and products. Our offerings are suitable for individuals having the desire to nurture their own health, pursue excellence in any sector of life, be it professional or personal, restore balance and create greater joy and fulfilment in their lives.
	          </p>

	        </section>

	        <!--
	        ================================================== -->
	        <section id="offerings">
	          <div class="page-header">
	            <h1>Our Offerings</h1>
	          </div>
	          <p>The areas covered in our programs and workshops include: Wellness &amp; Health Coaching, Stress management, One-One coaching, meditation, Goal setting, Personal Excellence &amp; Performance Management.</p>
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



