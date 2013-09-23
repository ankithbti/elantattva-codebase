<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('headerHomeAdmin.html');
?>
<body data-spy="scroll" data-target=".bs-docs-sidebar">


<?php
	include('headerNavigationAdmin.php');
?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Welcome Suresh,</h1>
    <p class="lead">You can manage and monitor your website content from here. Enjoy your day!!!!</p>
  </div>
</header>

<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
	  	<div class="span3 bs-docs-sidebar">
		    <ul class="nav nav-list bs-docs-sidenav">
		      <li><a href="#manage-events"><i class="icon-chevron-right"></i> Manage Events</a></li>
		      <li><a href="#manage-tod"><i class="icon-chevron-right"></i> Manage TOD</a></li>
		      <li><a href="#manage-newsletter"><i class="icon-chevron-right"></i> Manage Newsletter</a></li>
		      <li><a href="#monitor-stats"><i class="icon-chevron-right"></i> Monitor Stats</a></li>
		    </ul>
	  	</div>
  	<div class="span9">
  		<!--
        ================================================== -->
        <section id="manage-events">
          <div class="page-header">
            <h1>1. Manage Events</h1>
          </div>
          <p class="lead">About Managing Events</p>

          <div class="row-fluid">
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
          </div>
          <pre class="prettyprint">
			  More info about this task will appear here.
		  </pre>
        </section>


        <!-- 
        ================================================== -->
        <section id="manage-tod">
          <div class="page-header">
            <h1>2. Manage Thought of Day</h1>
          </div>
          <p class="lead">You can manage Thought of day to display</p>
			<pre class="prettyprint">
			  More info about this task will appear here.
			</pre>
          <p></p>
        </section>


        <!-- 
        ================================================== -->
        <section id="manage-newsletter">
          <div class="page-header">
            <h1>3. Manage Newsletter</h1>
          </div>
          <p class="lead">About Managing Newsletter</p>

          <div class="row-fluid">
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
          </div>
          <pre class="prettyprint">
			  More info about this task will appear here.
		  </pre>

        </section>

        <!-- 
        ================================================== -->
        <section id="manage-newsletter">
          <div class="page-header">
            <h1>4. Monitor Stats</h1>
          </div>
          <p class="lead">About Monitoring Stats</p>

          <div class="row-fluid">
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
            <div class="span6">
              <h2></h2>
              <p></p>
              <p></p>
            </div>
          </div>
          <pre class="prettyprint">
			  More info about this task will appear here.
		  </pre>
        </section>

  	</div>

</div></div>

<?php
	include('footerAdmin.php');
?>


</body>
</html>



