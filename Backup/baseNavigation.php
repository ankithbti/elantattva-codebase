<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      		<!-- HOME -->
          <?php
                if($_SESSION['page'] == "HOME"){
          ?>
            		<a class="brand" href="http://www.elantattva.com/"><font color='#f1f1f1'>Elan Tattva</font></a>
          <?php
            }else{
          ?>	
           			<a class="brand" href="http://www.elantattva.com/">Elan Tattva</a>
          <?php
              }
          ?>
      
      <div class="nav-collapse collapse">
        <ul class="nav">

          <!-- HOME -->
          <?php
                if($_SESSION['page'] == "HOME"){
          ?>
            <li class="active"><a href="http://www.elantattva.com"><i class="icon-home icon-white"></i> Home</a></li>
          <?php
            }else{
          ?>
            <li><a href="http://www.elantattva.com"><i class="icon-home icon-white"></i> Home</a></li>
          <?php
              }
          ?>
        	  
          <!-- HOME -->
          <?php
                if($_SESSION['page'] == "ABOUT"){
          ?>
            <li class="active"><a href="http://www.elantattva.com/about.php"><i class="icon-th-list icon-white"></i> About</a></li>
          <?php
            }else{
          ?>
            <li><a href="http://www.elantattva.com/about.php"><i class="icon-th-list icon-white"></i> About</a></li>
          <?php
              }
          ?>

          <!--TEAM-->
          <?php
                // if($_SESSION['page'] == "TEAM"){
          ?>
            <!-- <li class="active"><a href="underConstruction.php"><i class="icon-user icon-white"></i> Team</a></li> -->
          <?php
            // }else{
          ?>
            <!-- <li><a href="underConstruction.php"><i class="icon-user icon-white"></i> Team</a></li> -->
          <?php
              // }
          ?>

          <!-- Programs -->
          <?php
                if($_SESSION['page'] == "PROGRAMS"){
          ?>
            <li class="active"><a href="programs.php"><i class="icon-gift icon-white"></i> Programs</a></li>
          <?php
            }else{
          ?>
            <li><a href="programs.php"><i class="icon-gift icon-white" ></i> Programs</a></li>
          <?php
              }
          ?>
          

          <!-- Upcoming Events -->
          <?php
                if($_SESSION['page'] == "UPCOMINGEVENTS"){
          ?>
            <li class="active"><a href="UpcomingEvents.php"><i class="icon-calendar icon-white"></i> Upcoming Events</a></li>
          <?php
            }else{
          ?>
            <li><a href="UpcomingEvents.php"><i class="icon-calendar icon-white"></i> Upcoming Events</a></li>
          <?php
              }
          ?>

          <!-- Contact -->
          <?php
                if($_SESSION['page'] == "CONTACT"){
          ?>
            <li class="active"><a href="contact.php"><i class="icon-envelope icon-white"></i> Contact</a></li>
          <?php
            }else{
          ?>
            <li><a href="contact.php"><i class="icon-envelope icon-white"></i> Contact</a></li>
          <?php
              }
          ?>
          
          <!-- Blogs -->
          <?php
                if($_SESSION['page'] == "BLOGS"){
          ?>
            <li class="active"><a href="underConstruction.php"><i class="icon-comment icon-white"></i> Blogs</a></li>
          <?php
            }else{
          ?>
            <li><a href="underConstruction.php"><i class="icon-comment icon-white"></i> Blogs</a></li>
          <?php
              }
          ?>


          
          
        </ul>
      </div>
    </div>
  </div>
</div>