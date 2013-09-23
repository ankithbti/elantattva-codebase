<?php
  ob_start();
  session_start();
  $_SESSION['page'] = "MANAGE EVENTS" ;
  include('baseHeader.html');
  require_once('resources/dbconfig.php');
  $login_page="http://www.elantattva.com/admin.php";
  if(isset($_SESSION['userid']) && strlen($_SESSION['userid']) > 0){
  }else{
    header("Location: " . $login_page . "?warning=Please Login before using admin resources!!!!");
  }
?>
<body>


<?php
  include('baseNavigation.php');
?>

<header class="jumbotron subhead" id="overview">
  <div class="container">    
    <h1>Welcome <?php  if(isset($_SESSION['userid']) && isset($_SESSION['name']) && strlen($_SESSION['name']) > 0){ echo $_SESSION['name'] ; }else{ echo "Admin" ; } ?>,</h1>
    <p class="lead">In this page you can manage and monitor your Events !!!!</p>

  </div>
</header>
<br/>

<div class="container">
  <p align="center">
    <input onclick="createEditor();" type="button" class='btn btn-success' value="Add New Event">
    <input onclick="hideEditor();" type="button" class='btn btn-success' value="Hide Editor">
  </p>
  <!-- This div will hold the editor. -->
  <div id='submitForm'>
      <input type="text" id='title' placeholder="Enter Event title" required="required" />
      <br/>
      <input type="text" id='duration' placeholder="Enter Event Duration" required="required" />
      <br/>
      <input type="text" id='flashtext' placeholder="Enter Flash Text here" required="required" />
      <br/>
      <input onclick="setThought();" type="button" class='btn btn-warning' value="Set this Thought">
  </div>
  <div id='ajaxResult'></div>

  <br/>

    
    <ul id="responds">
      <span class='label label-info pull-right' style='padding:5px;'>Previous Submitted Thoughts are as mentioned below.</span><div class='clearBoth'></div>
    <?php
        //MySQL query
        $result = mysql_query("SELECT id, thought, `date`, who FROM tod ORDER BY id DESC");
        //get all records from add_delete_record table
        while($row = mysql_fetch_array($result)){
          echo "<li id='item_" . $row['id'] . "'>";
          echo "<div class='del_wrapper'><a href='#' class='del_button btn btn-danger' id='del-" . $row['id'] . "'>";
          echo "Delete";
          echo "</a></div>";
          echo "<p><strong>Thought: <font color='#000'>" . $row['thought'] . "</font></p><p>By: <font color='#000'>" . $row['who'] . "</font><p>On: <font color='#000'>" . $row['date'] . "</font></strong></p></li><div class='clearBoth'></div>";
      }//while ends here
    ?>
    </ul>

</div>

<hr>

<div class="container">
      <div class="row styledText">
        <div class="span4" align='center'>
          <a href='manageEvents.php' class='btn btn-large btn-info'>Manage Events</a>
        </div>
        <div class="span4" align='center'>
          <a href='#' class='btn btn-large btn-info'>Manage Newsletters</a>
        </div>
        <div class="span4" align='center'>
          <a href='manageTOD.php' class='btn btn-large btn-info'>Manage Tod</a>
        </div>
      </div>
</div>

<?php
	include('footer.php');
?>

</body>
</html>



