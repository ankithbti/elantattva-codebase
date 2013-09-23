<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "TOD" ;
  	include('headerHomeAdmin.html');
?>
<body>


<?php
	include('headerNavigationAdmin.php');
?>

<div class="container">

  <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
    <script>

      // Replace the <textarea id="editor"> with an CKEditor
      // instance, using default configurations.
      CKEDITOR.replace( 'editor1', {
        uiColor: '#00B1B0',
        toolbar: [
          [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
          [ 'FontSize', 'TextColor', 'BGColor' ]
        ]
      });

    </script>


<?php
	include('footerAdmin.php');
?>


</body>
</html>



