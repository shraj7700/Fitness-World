<?php
require_once('connect.php');
session_start();?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness World | Equipment-Preview</title>
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
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
 <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header start here-->
<!-- NAVBAR
==================================================-->
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo3.png" height="50px" width="170px" /></a>
              </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
				<nav class="cl-effect-11">
					<ul class="nav navbar-nav">
						<li><a href="index.php" data-hover="Home">Home</a></li>
						<li><a href="about.php" data-hover="About">About</a></li>  
						<li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>			
						<li><a href="equipments.php" data-hover="Equipment">Equipment</a></li>				
						<li><a href="inquiry.php" data-hover="Inquiry">Inquiry</a></li>
               <?php if(!$_SESSION['uname']=="")
					{
				?>
						<li><a href="artical.php"  data-hover="Article" style="color:black">Article</a></li>
						<li><a href="trainer.php"  data-hover="Trainer">Trainer</a></li>
						<li><a href="package.php"  data-hover="Package">Package</a></li>
						<li><a href="time_table.php"  data-hover="Time-Table">Time-Table</a></li>
						<li><a href="feedback.php"  data-hover="Feedback">Feedback</a></li>
						<li><a href="logout.php"  data-hover="Logout">Logout</a></li>
			  <?php	}
					else
					{ ?>
						<li><a href="login.php"  data-hover="Login"> Login | Register </a></li>
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
<!--your fitness start here-->
		<?php
							include"connect.php";
							
							$q="SELECT * FROM artical";
							$run=mysql_query($q);
							while($row1=mysql_fetch_assoc($run))
							{
								$id=$row1['ID'];
								$title=$row1['title'];
								$author=$row1['author'];
								$details=$row1['details'];
								$date1=$row1['date1'];
								$image=$row1['image'];
						?>	 
<div class="fitness">
	<div class="container">
		<div class="fitness-main">
			<div class="fitness-top wow slideInLeft" data-wow-delay="0.3s">
			<br>
				<h1><?php echo $title; ?></h1>
				</div>
			<div class="fitness-bottom">				
				<div class="col-md-7 fitness-rit wow zoomIn" data-wow-delay="0.3s">
					<h4>Description</h4>
					<p><?php echo $details; ?></p>

<h4>By <?php echo $author; ?> on <?php echo $date1; ?></h4>
 
				</div>
				<div class="col-md-5 fitness-lft wow zoomIn" data-wow-delay="0.3s">
					<img src="admin/articalimages/<?php echo $image; ?>" height="400px" width="400px" alt="" class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--your fitness end here-->
							<?php } ?>

<?php include"footer.php"; ?>
<!--footer end here-->
</body>
</html>