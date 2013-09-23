<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "PROGRAMS" ;
  	include('baseHeader.html');
?>
<body data-spy="scroll" data-target=".bs-docs-sidebar">


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
		<!-- <div class="span9">
		</div> -->
	  	<div class="span3 bs-docs-sidebar">
		    <ul class="nav nav-list bs-docs-sidenav">
		      <li><a href="#program1"><i class="icon-chevron-right"></i> <i class="icon-gift"></i> Life Recharged</a></li>
		      <li><a href="#program2"><i class="icon-chevron-right"></i> <i class="icon-gift"></i> Par Excellence</a></li>
		    </ul>
	  	</div>

	  	<div class="span9">
	  		
	        <!-- 
	        ================================================== -->
	        <section id="program1" align='justify'>
	          <div class="page-header">
	            <h1>Life Recharged</h1>
	          </div>
	          <p class='subHeading'>Jointly brought to you by <strong>&#96;Elan Tattva&#96;</strong> and <strong>&#96;Enlivened Yoga&#96;</strong></p>
	          <p>
	          	<strong>&#96;Life Recharged&#96;</strong> is a unique Stress Management workshop for 21st century urban life. The program blends Eastern and Western approaches (Modern Psychology, Yoga, NLP) to stress management. This is an opportunity to get initiated to processes that help you experience profound relaxation at mental, muscular and emotional levels. You will also be introduced to contemporary tenets and theoretical frameworks related to stress. Participants engage with questionnaire based tools and checklists to do stress profiling analysis for themselves. Learn proven techniques that help you to counteract stress and redirect your energy to meaningful pursuits in profession and personal life. This program is designed to give you the tools and skills to become stress-resistant amidst the pressures, insecurities and difficulties of modern life; Come, tackle life’s challenges with verve and panache, and be a victor in life.
	          </p>
	          <p><strong>Duration: </strong>1 Day (9:30 AM to 6 PM)</p>
	          <p><a href='brochures/Life Recharged Brochure Bangalore Rev H.pdf' target='_blank'>Click here</a> to Download e-brochure</p>
	        </section>

	        <!--
	        ================================================== -->
	        <section id="program2" align='justify'>
	          <div class="page-header">
	            <h1>Par Excellence</h1>
	          </div>
	          <p class='subHeading'>Jointly brought to you by <strong>&#96;Elan Tattva&#96;</strong> and <strong>&#96;Enlivened Yoga&#96;</strong></p>
	          <p>
	          	<strong>&#96;Par Excellence&#96;</strong> is a workshop specially designed for the pursuit of high impact personal excellence. The program integrates principles of NLP, Yoga, Modern Psychology, and Personal Energy Management. The course helps you to define and follow your goals (professional and personal) in a structured manner. We have designed interesting processes and activities to help you reflect deeply and understand your intrinsic motivations, beliefs and values that pull you towards your goals and dreams. A comprehensive and powerful visioning process is a key highlight of the workshop. We also introduce participants to creative problem solving techniques, as well as visualization processes that can be used to turbo-charge their way to goal manifestation. The workshop is an intensely enjoyable and insightful experience of a lifetime.
	          </p>
	          <p><strong>Duration: </strong>2 Days (9:30 AM to 6 PM on both days)</p>
	          <p><a href='brochures/Par Excellence Dehradun Brochure Rev B1.pdf' target='_blank'>Click here</a> to Download e-brochure</p>
	        </section>


	        
	  	</div>
	</div><!-- row -->
</div><!-- container -->


<?php
	include('footer.php');
?>

</body>
</html>



