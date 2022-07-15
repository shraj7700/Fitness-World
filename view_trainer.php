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
<title>Fitness-World | Trainer</title>
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
		<li><a href="trainer.php"  data-hover="Trainer"  style="color:black">Trainer</a></li>
			<li><a href="package.php"  data-hover="Package">Package</a></li>
				<li><a href="time_table.php"  data-hover="Time-Table">Time-Table</a></li>
					<li><a href="feedback.php"  data-hover="Feedback">Feedback</a></li>
					<li><a href="logout.php"  data-hover="Logout">Logout</a></li>
				</ul>
			<?php }
			else
			{ ?>
					<li><a href="login.php"  data-hover="Login"> Login | Register </a></li>
				</ul>
			<?php }?>	
            </nav>
            </div>
            <div class="clearfix"> </div>
             </nav>
          </div>
           <div class="clearfix"> </div>
    </div>
     <div class="clearfix"> </div>
</div>
<!--header end here-->
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	
  

	<!--Contextual classes-->
	 <div class="page-header">
        <h3>Our Trainer</h3>
      </div>
      <div class="table-responsive wow slideInLeft" data-wow-delay="0.3s">
    <table class="table table-bordered table-striped">
      <colgroup>
        <col class="col-xs-1">
        <col class="col-xs-7">
      </colgroup>
   <?php
							include"connect.php";
							$id=$_GET['id'];
							$q="SELECT * FROM trainer where ID=$id";
							$run=mysql_query($q);
							while($row1=mysql_fetch_assoc($run))
							{
								$id=$row1['ID'];
								$image=$row1['image'];
								$name=$row1['name'];
								$address=$row1['address'];
								$gender=$row1['gender'];
								$dob=$row1['dob'];
								$age=$row1['age'];
								$email=$row1['email'];
								$contact=$row1['contact'];
								$doj=$row1['doj'];
								$degree=$row1['degree'];
								$package_ID=$row1['class_ID'];
								$package_type_ID=$row1['class_type_ID'];
								$q1="SELECT * FROM package where ID=$package_ID";
							$run1=mysql_query($q1);
							$row1=mysql_fetch_assoc($run1);
							$package=$row1['class'];
							
							$q2="SELECT * FROM package_type where ID=$package_type_ID";
							$run2=mysql_query($q2);
							$row3=mysql_fetch_assoc($run2);
							$package_type=$row3['class_type'];
							
						?>	 
        <tr>
          <th>Image</th>
          <th><img src="admin\trainer\<?php echo $image;?>" height="170px" width="170px"></th>
        </tr>
		<tr>
			<th>Name</th>
			<th><?php echo $name;?></th>
     </tr>
	 <tr>
			<th>Gender</th>
			<th><?php echo $gender;?></th>
     </tr>
	 <tr>
			<th>Date OF Birth</th>
			<th><?php echo $dob;?></th>
     </tr>
	 <tr>
			<th>Age</th>
			<th><?php echo $age;?></th>
     </tr>
	 <tr>
			<th>Date of Join</th>
			<th><?php echo $doj;?></th>
     </tr>
	 <tr>
			<th>Degree</th>
			<th><?php echo $degree;?></th>
     </tr>
	 <tr>
			<th>Email-Id</th>
			<th><?php echo $email;?></th>
     </tr>
	 <tr>
			<th>Contact</th>
			<th><?php echo $contact;?></th>
     </tr>
	 <tr>
			<th>Address</th>
			<th><?php echo $address;?></th>
     </tr><tr>
			<th>Package</th>
			<th><?php echo $package;?></th>
     </tr><tr>
			<th>Package-Type</th>
			<th><?php echo $package_type;?></th>
     </tr>
					<?php } ?>
      </tbody>
    </table>
  </div>
     <div class="contact-bottom">
			  <form action="trainer.php">
				<div class="col-md-7 contact-left wow slideInLeft" data-wow-delay="0.3s">
					     <input type="submit" value="BACK"><br><br>
				</div>
				 <div class="clearfix"> </div>
			  </form>
			</div>
  
	
  
	</div>
</div>
</div>
<!--short codes end here-->
<!--footer start here-->
<?php include"footer.php"; ?>
<!--footer end here-->
</body>
</html>