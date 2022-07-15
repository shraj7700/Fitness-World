<?php
require_once('connect.php');
session_start();?><!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness World | Equipments</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />	
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
						<li><a href="equipments.php" data-hover="Equipment"  style="color:black">Equipment</a></li>				
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
<!--services-->

<!--train-serv -->
<div class="train-ser">
	<div class="container">
		<div class="train-ser-main">
			<div class="trin-ser-top wow slideInLeft" data-wow-delay="0.3s">
				<h3>Equipments</h3>
					</div>
			<div class="train-ser-bottom wow slideInRight" data-wow-delay="0.3s">
				<?php
							include"connect.php";
							$q="SELECT * FROM equipment where stock!=0";
							$run=mysql_query($q);
							while($row1=mysql_fetch_assoc($run))
							{
								$id=$row1['ID'];
								$image=$row1['image'];
								$name=$row1['name'];
								$details=$row1['details'];
								$price=$row1['price'];
						?>	 
				<div class="col-md-4 train-grid">
				  <div class="trin-top-grid">
					<div class="ser-setting">
					  <br/><img src="admin\equipment\<?php echo $image;?>" alt="" style="border:solid; height:300px; width:300px;"  class="img-responsive">
					       
	                 </div>
				  </div>
				  <div class="train-bottom-grid" style="height:120px; width:300px;" >
				  	<h4><?php echo $name;?></h4>
				  	<a href="preview.php?id=<?php echo $id;?>"><p><b>Click Hear View More Details</b></p></a>
				  </div>
				</div>
							<?php } ?>
				
			  <div class="clearfix"> </div>
		  </div>
		</div>
	</div>
</div>
<!--train-serv -->
<?php include"footer.php"; ?>
</body>
</html>