<?php
require_once('connect.php');
session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness World | Feedback</title>
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
<!-- animated-css 
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script> -->
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
                    <a class="navbar-brand" href="index.html"><img src="images/logo3.png" height="50px" width="170px" /></a>
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
						<li><a href="artical.php"  data-hover="Article">Article</a></li>
						<li><a href="trainer.php"  data-hover="Trainer">Trainer</a></li>
						<li><a href="package.php"  data-hover="Package">Package</a></li>
						<li><a href="time_table.php"  data-hover="Time-Table">Time-Table</a></li>
						<li><a href="feedback.php"  data-hover="Feedback" style="color:black">Feedback</a></li>
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
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	<!--Forms-->
	<div class="page-header">
        <h3>Feedback</h3>
      </div>
   <div class="contact-bottom">
			  <form method="get" autocomplete="off">
				<div class="col-md-7 contact-left wow slideInLeft" data-wow-delay="0.3s">
					<p>Name</p>
		             <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="name" />
					<p>Feedback</p>
					 <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="feedback"> </textarea>
					 <input type="submit" value="Send" name="submit"><br><br>
				</div>
				 <div class="clearfix"> </div>
			  </form>
<?php
	include('connect.php');
	if(isset($_GET['submit']))
	{
		$name=$_GET['name'];
		$message=$_GET['feedback'];
		$date1=date("d/m/Y");
			 
		mysql_query("INSERT into feedback (Name,Feedback,date1) values ('$name','$message','$date1')")or die(mysql_error());
		echo "Feedback sent successfully...";
	 }
?>
			</div>

	</div>
</div>
</div>
<!--short codes end here-->
<?php include"footer.php"; ?>
</body>
</html>