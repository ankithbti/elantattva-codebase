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
              <li class="dropdown-submenu"><a href="programs_new.php#achieversToolkit" tabindex="-1"><i class="icon-gift icon-white"></i> Achiever&lsquo;s Toolkit</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#at_goalsetting"><i class="icon-gift icon-white"></i> Effective Goal Setting 101</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_martialyogaforwinners"><i class="icon-gift icon-white"></i> Martial Yoga for Winners</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_spearheadplanning"><i class="icon-gift icon-white"></i> Spearhead Planning for Key Goals in Life</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#at_mindprogramming"><i class="icon-gift icon-white"></i> Mind Programming 101 for High Impact Goal Pursuit</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforcorporate" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Corporates</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#pfc_liferecharged"><i class="icon-gift icon-white"></i> Life Recharged</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfc_parexcellence"><i class="icon-gift icon-white"></i> Par Excellence</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfc_yogaforwinners"><i class="icon-gift icon-white"></i> Martial Yoga for Winners</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="#" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a href="programs_new.php#pfc_wellnessex_gfy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Fit Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfc_wellnessex_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfc_wellnessex_gy"><i class="icon-gift icon-white"></i> General Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfc_wellnessex_yfwl"><i class="icon-gift icon-white"></i> Yoga for Weight Loss</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu"><a href="programs_new.php#pfc_wellnessex_gwy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Well Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfc_wellnessex_yfhb"><i class="icon-gift icon-white"></i> Yoga for Healthy Back</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfc_wellnessex_yfhj"><i class="icon-gift icon-white"></i> Yoga for Healthy Joints</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfc_wellnessex_yfhd"><i class="icon-gift icon-white"></i> Yoga for Healthy Digestion</a></li>
                            </ul>
                        </li>
                      </ul>

                  </li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfc_oneonecoaching"><i class="icon-gift icon-white"></i> One-One Coaching</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforyouth" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Youth</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#pfy_liferecharged"><i class="icon-gift icon-white"></i>  Life Recharged</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfy_parexcellence"><i class="icon-gift icon-white"></i>  Par Excellence</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="programs_new.php#pfy_wellnessex" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a href="programs_new.php#pfy_wellnessex_gfy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Fit Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfy_wellnessex_gy"><i class="icon-gift icon-white"></i> General Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfy_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditatio</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu"><a href="programs_new.php#pfy_wellnessex_gwy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Well Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfy_wellnessex_yfwl"><i class="icon-gift icon-white"></i> Yoga for Weight Loss</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfy_wellnessex_yfhb"><i class="icon-gift icon-white"></i> Yoga for Healthy Back</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfy_wellnessex_yfhj"><i class="icon-gift icon-white"></i> Yoga for Healthy Joints</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfy_wellnessex_yfhd"><i class="icon-gift icon-white"></i> Yoga for Healthy Digestion</a></li>
                            </ul>
                        </li>
                      </ul>

                  </li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforngos" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for NGOs</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#pfn_liferecharged"><i class="icon-gift icon-white"></i>  Life Recharged</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfn_parexcellence"><i class="icon-gift icon-white"></i>  Par Excellence</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="programs_new.php#pfn_wellnessex" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a href="programs_new.php#pfn_wellnessex_gfy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Fit Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfn_wellnessex_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_gy"><i class="icon-gift icon-white"></i> General Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_mw"><i class="icon-gift icon-white"></i> Monsoon Wellnes</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditatio</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu"><a href="programs_new.php#pfn_wellnessex_gwy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Well Yoga</a>
                            <ul class="dropdown-menu">
                              <li><a href="programs_new.php#pfn_wellnessex_yfwl"><i class="icon-gift icon-white"></i> Yoga for Weight Loss</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_yfhb"><i class="icon-gift icon-white"></i> Yoga for Healthy Back</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_yfhj"><i class="icon-gift icon-white"></i> Yoga for Healthy Joints</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfn_wellnessex_yfhd"><i class="icon-gift icon-white"></i> Yoga for Healthy Digestion</a></li>
                            </ul>
                        </li>
                      </ul>

                  </li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforkids" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Kids</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#pfk_happyyoga"><i class="icon-gift icon-white"></i> Happy Yoga for Kids</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforall" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for All</a>
                <ul class="dropdown-menu">
                  <li><a href="programs_new.php#pfa_liferecharged"><i class="icon-gift icon-white"></i>  Life Recharged</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfa_parexcellence"><i class="icon-gift icon-white"></i>  Par Excellence</a></li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfa_yogaforwinners"><i class="icon-gift icon-white"></i> Martial Yoga for Winners</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="programs_new.php#pfa_wellnessex" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu dropup">
                        <li class="dropdown-submenu"><a href="programs_new.php#pfa_wellnessex_gfy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Fit Yoga</a>
                            <ul class="dropdown-menu dropup">
                              <li><a href="programs_new.php#pfa_wellnessex_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_gy"><i class="icon-gift icon-white"></i> General Yoga</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_mw"><i class="icon-gift icon-white"></i> Monsoon Wellnes</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditatio</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu"><a href="programs_new.php#pfa_wellnessex_gwy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Well Yoga</a>
                            <ul class="dropdown-menu dropup">
                              <li><a href="programs_new.php#pfa_wellnessex_yfwl"><i class="icon-gift icon-white"></i> Yoga for Weight Loss</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_yfhb"><i class="icon-gift icon-white"></i> Yoga for Healthy Back</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_yfhj"><i class="icon-gift icon-white"></i> Yoga for Healthy Joints</a></li>
                              <li class="divider"></li>
                              <li><a href="programs_new.php#pfa_wellnessex_yfhd"><i class="icon-gift icon-white"></i> Yoga for Healthy Digestion</a></li>
                            </ul>
                        </li>
                      </ul>

                  </li>
                  <li class="divider"></li>
                  <li><a href="programs_new.php#pfa_oneonecoaching"><i class="icon-gift icon-white"></i> One-One Coaching</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforschool" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Schools and Colleges</a>
                <ul class="dropdown-menu dropup">
                  <li><a href="programs_new.php#pfs_parexcellence"><i class="icon-gift icon-white"></i>  Par Excellence</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="programs_new.php#pfs_wellnessex" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu">
                        <li><a href="programs_new.php#pfs_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditatio</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfs_wellnessex_hyfk"><i class="icon-gift icon-white"></i> Happy Yoga for Kids</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfs_wellnessex_yfmc"><i class="icon-gift icon-white"></i> Yoga for Memory, Concentration</a>
                        </li>
                      </ul>

                  </li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforhotels" tabindex="-1"><i class="icon-gift icon-white"></i> Programs for Resorts, Spas, Hotels</a>
                <ul class="dropdown-menu dropup">
                  <li class="dropdown-submenu"><a href="programs_new.php#pfh_wellnessex" tabindex="-2"><i class="icon-gift icon-white"></i> The Elan Tattva Wellness Exclusive</a>

                      <ul class="dropdown-menu">
                        <li><a href="programs_new.php#pfh_wellnessex_gys"><i class="icon-gift icon-white"></i> General Yoga sequence (60mins)</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_my"><i class="icon-gift icon-white"></i> Martial Yoga (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_sn"><i class="icon-gift icon-white"></i> Surya Namaskar (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_p"><i class="icon-gift icon-white"></i> Pranayama (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_yn"><i class="icon-gift icon-white"></i> Yoga Nidra (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditation (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_hyfk"><i class="icon-gift icon-white"></i> Happy Yoga for kids</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_gy"><i class="icon-gift icon-white"></i> Gentle Yoga (60 mins)</a>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfh_wellnessex_dy"><i class="icon-gift icon-white"></i> Desktop Yoga (60 mins)</a>
                        </li>
                      </ul>

                  </li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu"><a href="programs_new.php#programsforyogaportfolio" tabindex="-1"><i class="icon-gift icon-white"></i>   Yoga Portfolio</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu"><a href="programs_new.php#pfyp_wellnessex_gfy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Fit Yoga</a>
                    <ul class="dropdown-menu dropup">
                      <li><a href="programs_new.php#pfyp_wellnessex_dy"><i class="icon-gift icon-white"></i> Desktop Yoga</a></li>
                      <li class="divider"></li>
                      <li><a href="programs_new.php#pfyp_wellnessex_mw"><i class="icon-gift icon-white"></i> Monsoon Wellnes</a></li>
                      <li class="divider"></li>
                      <li><a href="programs_new.php#pfyp_wellnessex_cm"><i class="icon-gift icon-white"></i> Cyclic Meditatio</a></li>
                      <li class="divider"></li>
                      <li><a href="programs_new.php#pfyp_wellnessex_ky"><i class="icon-gift icon-white"></i> Kids Yoga</a></li>
                      <li class="divider"></li>
                      <li><a href="programs_new.php#pfyp_wellnessex_gy"><i class="icon-gift icon-white"></i> General Yoga</a></li>
                    </ul>
                  </li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu"><a href="programs_new.php#pfyp_wellnessex_gwy" tabindex="-3"><i class="icon-gift icon-white"></i> Get Well Yoga</a>
                      <ul class="dropdown-menu dropup">
                        <li><a href="programs_new.php#pfyp_wellnessex_yfhb"><i class="icon-gift icon-white"></i> Yoga for Healthy Back</a></li>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfyp_wellnessex_yfhj"><i class="icon-gift icon-white"></i> Yoga for Healthy Joints</a></li>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfyp_wellnessex_yfhd"><i class="icon-gift icon-white"></i> Yoga for Healthy Digestion</a></li>
                        <li class="divider"></li>
                        <li><a href="programs_new.php#pfyp_wellnessex_yfwl"><i class="icon-gift icon-white"></i> Yoga for Weight Loss</a></li>
                      </ul>
                  </li>
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