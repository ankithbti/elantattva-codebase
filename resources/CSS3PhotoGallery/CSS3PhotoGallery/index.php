<!DOCTYPE html>  
<html lang="en">
  
<head>  

    <meta charset="utf-8" />  
    
    <title>Editable CSS3 Photo Gallery</title>  
    
    <link rel="stylesheet" href="stylesheet/grid.css" type="text/css"> 
    <link rel="stylesheet" href="stylesheet/html5.css" type="text/css" />   
    <link rel="stylesheet" href="stylesheet/master.css" type="text/css" />  
    
    <!--[if IE]>  
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->  
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type='text/javascript' src='javascript/fancyzoom.js'></script>
    <script type='text/javascript' src='javascript/demo.js'></script>
    
</head>  
  
<body>
    
    <header id="header">  
        <h1>Editable CSS3 Photo Gallery</h1>
		<p>Fun picture gallery with loads of HTML5, CSS3, jQuery, and PageLime!</p>
    </header>

	<nav class="container">
		<ul id="primaryNav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Nav One</a></li>
			<li><a href="#">Nav Two</a></li>
		</ul>
		<ul id="secondaryNav">
			<li><a href="http://css-tricks.com/">Back to Tutorial</a></li>
		</ul>
	</nav>

    <section id="content" class="container">
    
            <div class="span-18 column rounded">
				<div class="span-6 column rotated">
				    <a id="image1" class="cms-editable polaroid" href="#pic-1" rel="lightbox" title="first image"> <img src="gallery/1_s.jpg" alt="image" /> </a>
				</div>
				<div class="span-6 column rotated">
				    <a id="image2" class="cms-editable polaroid" href="#pic-2" rel="lightbox" title="second image"> <img src="gallery/2_s.jpg" alt="image" /> </a>
				</div>
				<div class="span-6 column rotated last">
				    <a id="image3" class="cms-editable polaroid" href="#pic-3" rel="lightbox" title="third image"> <img src="gallery/3_s.jpg" alt="image" /> </a>
				</div>
				<div class="span-6 column rotated">
				    <a id="image4" class="cms-editable polaroid" href="#pic-4" rel="lightbox" title="first image"> <img src="gallery/4_s.jpg" alt="image" /> </a>
				</div>
				<div class="span-6 column rotated">
				    <a id="image5" class="cms-editable polaroid" href="#pic-5" rel="lightbox" title="first image"> <img src="/pagelime/rendered-images/4335_0_image5.jpg" alt="image" /> </a>
				</div>
				<div class="span-6 column rotated last">
				    <a id="image6" class="cms-editable polaroid" href="#pic-6" rel="lightbox" title="first image"> <img src="gallery/6_s.jpg" alt="image" /> </a>
				</div>
				
				<div id="pic-1">
				    <img src="gallery/1.jpg" alt="image" />
				</div>
				<div id="pic-2">
				    <img src="gallery/2.jpg" alt="image" />
				</div>
				<div id="pic-3">
				    <img src="gallery/3.jpg" alt="image" />
				</div>
				<div id="pic-4">
				    <img src="gallery/4.jpg" alt="image" />
				</div>
				<div id="pic-5">
				    <img src="gallery/5.jpg" alt="image" />
				</div>
				<div id="pic-6">
				    <img src="gallery/6.jpg" alt="image" />
				</div>
            </div>
            
            <aside class="span-6 column last">
                <h2 id="gallery-name" class="cms-editable">
<p>Photos from Boulder Acoustic Society show</p>
</h2>
				<p id="gallery-description" class="cms-editable">The show as awesome! You should come next time.</p>
            </aside>
            
    </section>
    
    <footer>  
        <p>This single serving site is brought to you by Tom and Emil from <a href="http://www.pagelime.com/" title="PageLime">PageLime</a> and Chris from CSS-Tricks.</p>
        <a href="http://www.pagelime.com/" title="PageLime"><img src="images/pagelime-logo.jpg" alt="PageLime" /></a>
    </footer>
    
    <?php include("../footer.php"); ?>
	
</body>  

</html>  