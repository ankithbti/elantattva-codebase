<?php
  ob_start();
  session_start();
  $_SESSION['page'] = "MANAGE TOD" ;
  include('baseHeader.html');
?>
<body>


<?php
  include('baseNavigation.php');
?>

<br/>
<div class="container">
  
  <p align="center">
    <input onclick="createEditor();" type="button" class='btn btn-success' value="Show Editor">
    <input onclick="hideEditor();" type="button" class='btn btn-success' value="Hide Editor">
  </p>
  <!-- This div will hold the editor. -->
  <div id='submitForm'>
    <div id="editor">
    </div>
    <br/>
    <div id='submitThought'>
      <input type="text" id='who' placeholder="Enter Name who said this" required="required" />
      <br/>
      <input onclick="setThought();" type="button" class='btn btn-warning' value="Set this Thought">
    </div>
    <br/>
    
  </div>
  <div id='ajaxResult'></div>
</div>
  <!-- <div id="contents" style="display: none">
    <p>
      Edited Contents:
    </p>
    This div will be used to display the editor contents.
    <div id="editorcontents">
    </div>
  </div> -->

  <!-- <span class='showForm'>Show the form to submit Thought of the Day</span>
  <div id='enterTOD'>
    <form action="setTod.php" method="post">
      <input type="text"/>
      <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
      <input style="cursor:pointer" class='btn btn-large btn-info' type="submit" value="Send">
    </form>
  </div> -->

<?php
	include('footer.php');
?>


</body>
</html>



