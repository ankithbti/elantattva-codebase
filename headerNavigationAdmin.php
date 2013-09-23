<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="http://www.elantattva.com/">Elan Tattva</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
        	  <!-- HOME -->
	          <?php
	                if($_SESSION['page'] == "HOME"){
	          ?>
	            <li class="active"><a href="admin.php"><i class="icon-home"></i> Home</a></li>
	          <?php
	            }else{
	          ?>
	            <li class=""><a href="admin.php"><i class="icon-home"></i> Home</a></li>
	          <?php
	              }
	          ?>

	          

	          <!-- Manage Events -->
	          <?php
	                if($_SESSION['page'] == "EVENTS"){
	          ?>
	            <li class="active"><a href="#">Manage Events</a></li>
	          <?php
	            }else{
	          ?>
	            <li class=""><a href="#">Manage Events</a></li>
	          <?php
	              }
	          ?>

	          <!-- Manage Newsletter -->
	          <?php
	                if($_SESSION['page'] == "NEWSLETTER"){
	          ?>
	            <li class="active"><a href="#">Manage Newsletter</a></li>
	          <?php
	            }else{
	          ?>
	            <li class=""><a href="#">Manage Newsletter</a></li>
	          <?php
	              }
	          ?>

	          <!-- TOD -->
	          <?php
	                if($_SESSION['page'] == "TOD"){
	          ?>
	            <li class="active"><a href="manageTOD.php">Set TOD</a></li>
	          <?php
	            }else{
	          ?>
	            <li class=""><a href="manageTOD.php">Set TOD</a></li>
	          <?php
	              }
	          ?>


          
          
        </ul>
      </div>
    </div>
  </div>
</div>