<?php
  ob_start();
  session_start();
  $_SESSION['page'] = "ADMIN" ;
  include('baseHeader.html');
?>
<body>


<?php
  include('baseNavigation.php');
?>




<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Welcome <?php  if(isset($_SESSION['userid']) && isset($_SESSION['name']) && strlen($_SESSION['name']) > 0){ echo $_SESSION['name'] ; }else{ echo "Admin" ; } ?>,</h1>
    <p class="lead">You can manage and monitor your website content from here. Enjoy your day!!!!</p>

    <?php
      if(isset($_SESSION['userid']) && strlen($_SESSION['userid']) > 0){
    ?>
      <div class="row styledText">
        <div class="span4" align='center'>
          <a href='manageEvents.php' class='btn btn-large btn-success'>Manage Events</a>
        </div>
        <div class="span4" align='center'>
          <a href='#' class='btn btn-large btn-success'>Manage Newsletters</a>
        </div>
        <div class="span4" align='center'>
          <a href='manageTOD.php' class='btn btn-large btn-success'>Manage Tod</a>
        </div>
      </div>
    <?php
        }
    ?>
  </div>
</header>

<?php
      if(isset($_SESSION['userid']) && strlen($_SESSION['userid']) > 0){
?>
      <div class="container">
        <?php
          if(isset($_GET['success'])){
        ?>
        <div class="alert alert-success gap">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Welcome Aboard <?php if(isset($_GET['email'])){ echo $_GET['email'] ; }?> ! </strong>
          <?php echo $_GET['success'] ; ?>
        </div>
        <?php
          }
        ?>
      </div>

<?php
        }else{

?>

<div class="container">

      <?php
          if(isset($_GET['error'])){
        ?>
        <div class="alert alert-error gap">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Oops!! </strong>
          <?php echo $_GET['error'] ; ?>
        </div>
        <?php
          }
        ?>
        <?php
          if(isset($_GET['success'])){
        ?>
        <div class="alert alert-success gap">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Welcome Aboard <?php if(isset($_GET['email'])){ echo $_GET['email'] ; }?> ! </strong>
          <?php echo $_GET['success'] ; ?>
        </div>
        <?php
          }
        ?>

        <?php
          if(isset($_GET['warning'])){
        ?>
        <div class="alert alert-info gap">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Hmmmmm! </strong>
          <?php echo $_GET['warning'] ; ?>
        </div>
        <?php
          }
        ?>
      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name="email" class="input-block-level" placeholder="Email address" required="required" value="<?php echo $_GET['email']; ?>"/>
        <input type="password" name="passwd" class="input-block-level" placeholder="Password" required="required"/>
        <!-- <label class="checkbox">
          <input type="checkbox" name="remember" value="remember-me"> Remember me
        </label> -->
        <input type="hidden" name="submitted" value="TRUE"/>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>
</div> <!-- /container -->

<?php
  }
?>
<?php
  include('footer.php');
?>

</body>
</html>