<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "FOUNDERS" ;
  	include('baseHeader.html');
?>
<body data-spy="scroll" data-target=".bs-docs-sidebar">


<?php
  include('baseNavigation.php');
?>

<div class="jumbotron">
    <h1>Our Team</h1>
    	<p>Meet the catalysts behind Elan Tattva</p>
</div>

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row styledText">
	  	<div class="span3 bs-docs-sidebar">
		    <ul class="nav nav-list bs-docs-sidenav">
		      <li class="active"><a href="#suresh"><i class="icon-chevron-right"></i> <i class="icon-user"></i> Suresh Sivaraman</a></li>
		      <li><a href="#kiran"><i class="icon-chevron-right"></i> <i class="icon-user"></i> Kiran Shetty</a></li>
		      <li><a href="#kabir"><i class="icon-chevron-right"></i> <i class="icon-user"></i> Kabir Ahluwalia</a></li>
		    </ul>
	  	</div>


	  	<div class="span9">
	  		
	        <!-- 
	        ================================================== -->
	        <section id="suresh">
	          <div class="page-header">
	            <h1>Suresh Sivaraman</h1>
	          </div>
	          
		      <img src="images/suresh.png" class="img-rounded img-polaroid" style="margin:10px;width:200px;height:150px;position:relative;float:left;"/>    
	          <p><strong>Suresh Sivaraman</strong> (Co-Founder of Elan Tattva, Certified NLP trainer [ANLP India] and Certified Advanced Life Coach [ANLP India]).</p>

	          <p><strong>Suresh</strong> has done his MBA from IIM Bangalore (PGSEM) and B.Tech from Govt College of Engineering, Trivandrum, University of Kerala. He has worked in the IT industry for nearly 14 yrs, with 7 years in various Management positions in India and Europe. He has handled roles of Delivery Manager, Senior Project Manager, Onsite Manager for large programs in the IT industry.</p>

	          <p>His passions include Inter Cultural Management, People and Process Management, Organizational Development, NLP, Transactional Analysis, Life Coaching, Reiki, Meditation, Tai chi, Yoga, New Age Music. He has conducted workshops and sessions in Bangalore on personal empowerment, law of attraction, meditations, one-one coaching.</p>
	      	
	        </section>

	        <!--
	        ================================================== -->
	        <section id="kiran">
	          <div class="page-header">
	            <h1>Kiran Shetty</h1>
	          </div>
	          <img src="resources/images/kiran_snap.jpg" class="img-rounded img-polaroid" style="margin:10px;width:150px;height:150px;position:relative;float:left;"/> 
	          <p><strong>Kiran Shetty</strong> (Co-Founder of Elan Tattva, Certified Teacher/Trainer of Yoga [Bihar School of Yoga, SVYASA Yoga University, Bangalore, Martial Arts Expert, Coach).</p>

	          <p><strong>Kiran</strong> has done his MBA from Mangalore University, and Advanced Marketing Management from IIM-Kozhikode.</p>

	          <p>His passion for health and fitness led him to take a career break and further explore the world of yoga. Practicing Yoga for the last 10 years, he has experienced a profound sense of wellbeing i.e., physical, mental and emotional. His journey into yoga is a natural progression from Martial arts. He started learning martial arts since the age of 16. He has realised that martial arts and yoga have a lot in common; they make one calm and gentle, yet intensely aware and strong.</p>

	          <p><u>His credentials in Yoga and Martial Arts include:</u><br/>
	          Yoga Instructors Course from SVYASA Yoga University, Bangalore Teachers Training Course, Bihar Yoga School, Bihar (World’s first Yoga University) Post Graduate Diploma in Yoga Therapy, SVYASA Yoga University, Bangalore Black Belt 3rd Dan in Karate and medal winner at National Karate tournament Certification course in Psychology from Indian Psychology Institute, Pondicherry.
				</p>
	        </section>


	        <!--
	        ================================================== -->
	        <section id="kabir">
	          <div class="page-header">
	            <h1>Kabir Ahluwalia</h1>
	          </div>
	          <img src="img/kabir.png" class="img-rounded img-polaroid" style="margin:10px;width:150px;height:150px;position:relative;float:left;"/>
	          <p><strong>Kabir Ahluwalia</strong> (Co-Founder of Elan Tattva, Certified NLP Master Practitioner [ANLP India], Certified Advanced Life Coach [ANLP India], Psychotherapist, Intuitive Card Reader, Graphologist, Pranic Healer and Spiritual Counsellor.</p>

	          <p><strong>Kabir</strong> is a successful Hotelier and Entrepreneur in Travel & Tourism Industry. He has corporate industry experience from 2007 onwards. Along with his business/professional commitments, he has pursued his deep passion in coaching, counselling and therapy. His key offerings in these areas include Outcome focused Counselling  (a new and increasingly used therapeutic approach that focuses on helping clients construct solutions rather than solve problems), LIFE ENERGY PATHWAY REPROGRAMMING (LEPR) which involves reprogramming the brain and removing the blockages from the energy pathways (allowing the body to regain perfect balance and function normally and to reach optimum health), Spiral Personality Type Counselling (Helping individuals understand themselves with spiral personality colour coding).</p>
	        </section>

	        
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<?php
	include('footer.php');
?>


</body>
</html>



