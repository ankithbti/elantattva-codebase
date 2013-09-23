 <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <!-- HOME -->
          <?php
                if($_SESSION['page'] == "ABOUT"){
          ?>
            <li class="active"><a href="http://www.elantattva.com/about.php"><i class="icon-home"></i> About</a></li>
          <?php
            }else{
          ?>
            <li><a href="http://www.elantattva.com/about.php"><i class="icon-home"></i> About</a></li>
          <?php
              }
          ?>

          <!--TEAM-->
          <?php
                if($_SESSION['page'] == "TEAM"){
          ?>
            <li class="active"><a href="underConstruction.php"><i class="icon-user"></i> Team</a></li>
          <?php
            }else{
          ?>
            <li><a href="underConstruction.php"><i class="icon-user"></i> Team</a></li>
          <?php
              }
          ?>

          <!-- Programs -->
          <?php
                if($_SESSION['page'] == "PROGRAMS"){
          ?>
            <li class="active"><a href="underConstruction.php"><i class="icon-gift"></i> Programs</a></li>
          <?php
            }else{
          ?>
            <li><a href="underConstruction.php"><i class="icon-gift"></i> Programs</a></li>
          <?php
              }
          ?>
          

          <!-- Upcoming Events -->
          <?php
                if($_SESSION['page'] == "UPCOMINGEVENTS"){
          ?>
            <li class="active"><a href="UpcomingEvents.php"><i class="icon-calendar"></i> Upcoming Events</a></li>
          <?php
            }else{
          ?>
            <li><a href="UpcomingEvents.php"><i class="icon-calendar"></i> Upcoming Events</a></li>
          <?php
              }
          ?>

          <!-- Contact -->
          <?php
                if($_SESSION['page'] == "CONTACT"){
          ?>
            <li class="active"><a href="contact.php"><i class="icon-envelope"></i> Contact</a></li>
          <?php
            }else{
          ?>
            <li><a href="contact.php"><i class="icon-envelope"></i> Contact</a></li>
          <?php
              }
          ?>
          
          <!-- Blogs -->
          <?php
                if($_SESSION['page'] == "BLOGS"){
          ?>
            <li class="active"><a href="underConstruction.php"><i class="icon-comment"></i> Blogs</a></li>
          <?php
            }else{
          ?>
            <li><a href="underConstruction.php"><i class="icon-comment"></i> Blogs</a></li>
          <?php
              }
          ?>

        </ul>
        <?php
                if($_SESSION['page'] == "HOME"){
          ?>
        <h3 class="muted"><a href="http://www.elantattva.com"><img src='resources/images/newLogo.jpg' width='100px' height='80px' alt='Logo' /></a></h3>

        <?php
          }else{
        ?>
          <h3 class="muted"><a href="http://www.elantattva.com"><img src='resources/images/newLogo.jpg' width='50px' height='50px' alt='Logo' /> ELAN TATTVA</a></h3>
        <?php
          }
        ?>
</div>
    <?php
                if($_SESSION['page'] == "HOME"){
    ?>

    <?php

      }else{
    ?>
        <hr>

    <?php
      }
    ?>

      