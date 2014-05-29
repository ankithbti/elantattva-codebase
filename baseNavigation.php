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
          if(isset($_SESSION['userid']) && strlen($_SESSION['userid']) > 0){
          ?>
            <a class="brand" href="admin.php"><font color='#f1f1f1'><?php echo $_SESSION['userid'] ; ?></font></a>
          <?php
            }else{
          ?>
          <?php
                if($_SESSION['page'] == "HOME"){
          ?>
            		<a class="brand" href="http://www.elantattva.com/"><font color='#f1f1f1'>Elan Tattva</font></a>
          <?php
            }else{
          ?>	
           			<a class="brand" href="http://www.elantattva.com/"><font color='#f1f1f1'>Elan Tattva</font></a>
          <?php
              }
            }//top else
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

          <!-- Founder -->
          <?php
                if($_SESSION['page'] == "FOUNDERS"){
          ?>
            <li class="active"><a href="ourteam.php"><i class="icon-comment icon-white"></i> Team</a></li>
          <?php
            }else{
          ?>
            <li><a href="ourteam.php"><i class="icon-comment icon-white"></i> Team</a></li>
          <?php
              }
          ?>

          <!--TEAM-->
          <?php
                if($_SESSION['page'] == "TEAM"){
          ?>
            <!-- <li class="active"><a href="team.php"><i class="icon-user icon-white"></i> Team</a></li> -->
          <?php
            }else{
          ?>
            <!-- <li><a href="team.php"><i class="icon-user icon-white"></i> Team</a></li> -->
          <?php
              }
          ?>

          <!-- Programs -->
          <?php
                if($_SESSION['page'] == "PROGRAMS"){
          ?>
            <li class="dropdown active"><a href="programs_new.php" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gift icon-white"></i> Programs <b class="caret"></b></a>
          <?php
            }else{
          ?>
            <li class="dropdown"><a href="programs_new.php" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gift icon-white" ></i> Programs <b class="caret"></b></a>
          <?php
              }
          ?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li class="dropdown-submenu"><a href="programs_new.php#programsforjtms" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Junior to Mid Level Staff</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#at_pa101"><i class="icon-gift icon-white"></i> Power Achiever 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_ig101"><i class="icon-gift icon-white"></i> Inspiring Goals 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_raw"><i class="icon-gift icon-white"></i> Recharge &amp; Win</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_easi101"><i class="icon-gift icon-white"></i> Emotional &amp; Social Intelligence 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_tm"><i class="icon-gift icon-white"></i> Time Mastery</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_bai"><i class="icon-gift icon-white"></i> Belief &amp; Influence</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_beabl"><i class="icon-gift icon-white"></i> Business Etiquette &amp; Body Language</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsformm" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Middle Management</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#at_pa201"><i class="icon-gift icon-white"></i> Power Achiever 201</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_ig101401s"><i class="icon-gift icon-white"></i> Inspiring Goals 101-401 series</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_raw2"><i class="icon-gift icon-white"></i> Recharge &amp; Win</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_easi101401s"><i class="icon-gift icon-white"></i> Emotional &amp; Social Intelligence 101-401 series</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_tm2"><i class="icon-gift icon-white"></i> Time Mastery</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_bai2"><i class="icon-gift icon-white"></i> Belief &amp; Influence</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_dy2"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_oooc"><i class="icon-gift icon-white"></i> Executive/Leadership One-on-One Coaching</a></li>
                </ul>
              </li>
              <li class="divider"></li>

              <li class="dropdown-submenu"><a href="programs_new.php#ows" tabindex="-1"><i class="icon-gift icon-white"></i> Open Workshops</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#ows_pa101"><i class="icon-gift icon-white"></i> Power Achiever 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_ig101"><i class="icon-gift icon-white"></i> Inspiring Goals 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_raw"><i class="icon-gift icon-white"></i> Recharge &amp; Win</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_easi101"><i class="icon-gift icon-white"></i> Emotional &amp; Social Intelligence 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_tm"><i class="icon-gift icon-white"></i> Time Mastery</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_bai"><i class="icon-gift icon-white"></i> Belief &amp; Influence</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_beabl"><i class="icon-gift icon-white"></i> Business Etiquette &amp; Body Language</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#ows_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <!-- Media/Press -->
          <?php
                if($_SESSION['page'] == "GALLERY"){
          ?>
            <li class="active"><a href="gallery.php"><i class="icon-picture icon-white"></i> Gallery</a></li>
          <?php
            }else{
          ?>
            <li><a href="gallery.php"><i class="icon-picture icon-white"></i> Gallery</a></li>
          <?php
              }
          ?>
          
          <!-- Media/Press -->
          <?php
                if($_SESSION['page'] == "PRESS"){
          ?>
            <li class="active"><a href="press.php"><i class="icon-bullhorn icon-white"></i> Media</a></li>
          <?php
            }else{
          ?>
            <li><a href="press.php"><i class="icon-bullhorn icon-white"></i> Media</a></li>
          <?php
              }
          ?>

          <!-- Upcoming Events -->
          <?php
                if($_SESSION['page'] == "UPCOMINGEVENTS"){
          ?>
            <li class="active"><a href="UpcomingEvents.php"><i class="icon-calendar icon-white"></i> Events</a></li>
          <?php
            }else{
          ?>
            <li><a href="UpcomingEvents.php"><i class="icon-calendar icon-white"></i> Events</a></li>
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

          <!-- Testimonials -->
          <?php
                if($_SESSION['page'] == "TESTIMONIALS"){
          ?>
            <li class="active"><a href="testimonials.php"><i class="icon-heart icon-white"></i> Testimonials</a></li>
          <?php
            }else{
          ?>
            <li><a href="testimonials.php"><i class="icon-heart icon-white"></i> Testimonials</a></li>
          <?php
              }
          ?>

          
          <!-- Blogs -->
          <?php
                if($_SESSION['page'] == "BLOGS"){
          ?>
            <!-- <li class="active"><a href="underConstruction.php"><i class="icon-comment icon-white"></i> Blogs</a></li> -->
          <?php
            }else{
          ?>
            <!-- <li><a href="underConstruction.php"><i class="icon-comment icon-white"></i> Blogs</a></li> -->
          <?php
              }
          ?>

          <!-- Logout -->
          <?php
          if(isset($_SESSION['userid']) && strlen($_SESSION['userid']) > 0){
          ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Admin Activities <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="admin.php"><i class="icon-home"></i> Admin Home</a></li>
                  <li><a href="manageEvents.php"><i class="icon-calendar"></i> Manage Events</a></li>
                  <li><a href="#"><i class="icon-edit"></i> Manage Newsletter</a></li>
                  <li><a href="manageTOD.php"><i class="icon-text-width"></i> Set TOD</a></li>
                  <li class="divider"></li>
                  <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
                </ul>
              </li>
          <?php
          }
          ?>
          
        </ul>
      </div>
    </div>
  </div>
</div>