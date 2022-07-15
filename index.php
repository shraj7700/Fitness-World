<?php
require_once('connect.php');
session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness World | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Zero Size Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
 <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--responsive-->
 <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</head>
<body>
<!--header start here-->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<!-- NAVBAR
================================================== -->

<div class="header">
    <div class="navbar-wrapper">
      <div class="container1">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
				<div class="logo wow slideInLeft" data-wow-delay="0.3s">
					<a href="index.html"><img src="images/logo3.png" height="50px" width="170px" /></a>
				</div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
				<nav class="cl-effect-11">
				<ul class="nav navbar-nav">
					<li><a href="index.php" data-hover="Home"   style="color:black">Home</a></li>
					<li><a href="about.php" data-hover="About">About</a></li>  
					<li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>			
					<li><a href="equipments.php" data-hover="Equipment">Equipment</a></li>				
					<li><a href="inquiry.php" data-hover="Inquiry">Inquiry</a></li>
			<?php if(!$_SESSION['uname']=="")
				  {
			?>
					<li><a href="artical.php"  data-hover="Article">Article</a></li>
					<li><a href="trainer.php"  data-hover="Trainer">Trainer</a></li>
					<li><a href="package.php"  data-hover="Package">Package</a></li>
					<li><a href="time_table.php"  data-hover="Time-Table">Time-Table</a></li>
					<li><a href="feedback.php"  data-hover="Feedback">Feedback</a></li>
					<li><a href="logout.php"  data-hover="Logout">Logout</a></li>
			<?php }
				else
				  { ?>
					<li><a href="login.php"  data-hover="Login | Register"> Login | Register </a></li>
			<?php }?>	
				</ul>
				</nav>
            </div>

            <div class="clearfix"> </div>
             </nav>
          </div>
           <div class="clearfix"> </div>
    </div>
     <div class="clearfix"> </div>
</div>
<!--banner start here-->
 <div class="banner">
 		<div class="banner-main">
	 	   <section class="slider">
			 <div class="flexslider">
				<ul class="slides">
				  <li>
				  	<div class="banner-bottom">
				  		<div class="container">
					  		<div class="bann-text wow bounceInRight" data-wow-delay="0.3s">
							 	<h3>Meditation</h3>
							 	<p>The Physical Activity Guidelines for Americans was created by the Office of Disease Prevention and Health Promotion. This publication suggests that all adults should avoid inactivity to promote good health mentally and physically.</p>	
						 	</div>			 	
					   </div>
				 	</div>
				  </li>
				  <li>
				  	<div class="banner-bottom1">
				  		<div class="container">
					  		<div class="bann-text wow bounceInRight" data-wow-delay="0.3s">
							 	<h3>Walking</h3>
							 	<p> This publication suggests that all adults should avoid inactivity to promote good health mentally and physically.</p>	
						 	</div>			 	
					   </div>
				 	</div>
				  </li>
				  <li>
				  	<div class="banner-bottom2">
				  		<div class="container">
					  		<div class="bann-text wow bounceInRight" data-wow-delay="0.3s">
							 	<h3>Excersice</h3>
							 	<p>Physical fitness can also prevent or treat many chronic health conditions brought on by unhealthy lifestyle or aging.</p>	
						 	</div>			 	
					   </div>
				 	</div>
				  </li>				  
			    </ul>
			 </div>
			 <div class="clearfix"> </div>
		   </section>
 		</div>
 </div>
<!--banner end here-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){				 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!-- FlexSlider -->
<!--banner-info strat here-->
<!--bann below grid start here-->
<div class="bann-grid">
	<div class="container">
		<div class="bann-grid-main wow bounceInRight" data-wow-delay="0.3s">
			<div class="col-md-3 bann-works">
				<div class="ban-setting">
				  <img src="images/g1.jpg" alt="" class="img-responsive">
				       <div class="captn">
							<h4>Meditation</h4>							
						</div>
                 </div>
				<!--<h6>Class-Type 1</h6>-->
			</div>
			<div class="col-md-3 bann-works">
				<div class="ban-setting">
				  <img src="images/g2.jpg" alt="" class="img-responsive">
				      <div class="captn">
							<h4>Virabhadrasana 4</h4>							
						</div>
                 </div>
			<!--	<h6>Class-Type 2</h6>-->
			</div>
			<div class="col-md-3 bann-works">
				<div class="ban-setting">
				  <img src="images/g3.jpg" alt="" class="img-responsive">
				      <div class="captn">
							<h4>Virabhadrasana 1</h4>							
						</div>
                 </div>
				<!--<h6>Class-Type 3</h6>-->
			</div>
			<div class="col-md-3 bann-works">
				<div class="ban-setting">
				  <img src="images/g4.jpg" alt="" class="img-responsive">
				      <div class="captn">
							<h4>Vrikshasana</h4>							
						</div>
                 </div>
				<!--<h6>Class-Type 4</h6>-->
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--bann beloew end here-->
<!--your fitness start here-->
<div class="fitness">
	<div class="container">
		<div class="fitness-main">
			<div class="fitness-top wow slideInLeft" data-wow-delay="0.3s">
				<h1>Your Fitness</h1>
				<p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.But I must explain to you how all this mistaken.</p>
			</div>
			<div class="fitness-bottom">				
				<div class="col-md-7 fitness-rit wow zoomIn" data-wow-delay="0.3s">
					<h4>Fitness World</h4>
					<p>Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports, occupations and daily activities. Physical fitness is generally achieved through proper nutrition,[1] moderate-vigorous physical exercise,[2] and sufficient rest.[3]

Before the industrial revolution, fitness was defined as the capacity to carry out the day’s activities without undue fatigue. However, with automation and changes in lifestyles physical fitness is now considered a measure of the body's ability to function efficiently and effectively in work and leisure activities, to be healthy, to resist hypokinetic diseases, and to meet emergency situations.</p>
     <a href="about.php" class="hvr-underline-from-left">Read More</a>
				</div>
				<div class="col-md-5 fitness-lft wow zoomIn" data-wow-delay="0.3s">
					<img src="images/g5.jpg" alt="" class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--your fitness end here-->

<!--footer start here-->
<?php include"footer.php"; ?>
</body>
</html>