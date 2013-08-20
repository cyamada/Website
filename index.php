<!--

	Check out my source code on github:
    
    https://github.com/cyamada/Website

-->
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>home</title>	
	<link href="css/main.css" rel="stylesheet" type="text/css">
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery-2.0.0.js"></script>
<!--    <script type="text/javascript" src="../js/s3Slider.js"></script>
-->
    <script type="text/javascript" src="js/eislideshow/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/eislideshow/jquery.eislideshow.js"></script>
    
    <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation   : 'center',
					autoplay 	: true,
					slideshow_interval	: 4000,
                });
            });
    </script>
    
    <link href="css/eiSlider/eIStyle.css" rel="stylesheet" type="text/css" media="screen">
    
    <noscript>
    	<link href="css/eiSlider/noscript.css" rel="stylesheet" type="text/css" />
    </noscript>
</head>

<body>

<?php include('php/header.php'); ?>

<div id="main">
   	<div class="one">
       	<div class="wrapper">
            <?php include('php/indexBanner.php'); ?>
        </div><!-- wrapper -->
    </div> <!-- one -->
      
    <div class="two">
      	<div class="wrapper">
            <h2>ABOUT</h2>
            <?php include('php/about.php'); ?>
        </div><!-- wrapper -->
    </div><!-- two -->
        
    <div class="three">
       	<div class="wrapper">
            <h2>FIND ME ONLINE</h2>
            <div class="level-one">
            	<ul>
                	<li class="linkedin-link">
                    	<span class="col-description">
                        	Connect on LinkedIn
                        </span>
                        <a href="http://www.linkedin.com/in/cyamada/"><img src="images/icons/64_x_64px/in_dark.png" /></a>
                    </li>
                    <li class="middle-soc">
                    	<span class="col-description">
                        	I'm on Facebook
                        </span>
                        <a href="https://www.facebook.com/cayamada/"><img src="images/icons/64_x_64px/facebook_dark.png" /></a>
                    </li>
                    <li class="last-soc">
                    	<span class="col-description">
                        	Check out some of the code I've written
                        </span>
                        <a href="https://github.com/cyamada"><img class="two-line" src="images/icons/64_x_64px/github_dark.png" /></a>
                    </li>
                </ul>
            </div><!-- level-one -->
            <div class="level-two">
            	<ul>
                	<li>
                    	<span class="col-description">
                        	Watch some of my videos
                        </span>
                        <a href="http://www.youtube.com/iconicfx"><img src="images/icons/64_x_64px/youtube_dark.png" /></a>
                    </li>
                    <li class="middle-soc">
                    	<span class="col-description">
                        	Pretty pictures
                        </span>
                        <a href="http://www.flickr.com/photos/ckyamada"><img src="images/icons/64_x_64px/flickr_dark.png" /></a>
                    </li>
                    <li class="last-soc">
                    	<span class="col-description">
                        	More artsy videos
                        </span>
                        <a href="https://vimeo.com/cayamada"><img src="images/icons/64_x_64px/vimeo_dark.png" /></a>
                    </li>
                </ul>
            </div><!-- level-two -->
        </div><!-- wrapper -->
    </div><!-- three -->
        
</div><!-- main -->

</body>
</html>
