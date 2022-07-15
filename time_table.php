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
<title>Fitness-World | Class</title>
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
						<li><a href="artical.php" data-hover="Article">Article</a></li>
						<li><a href="trainer.php" data-hover="Trainer">Trainer</a></li>
						<li><a href="package.php" data-hover="Package">Package</a></li>
						<li><a href="time_table.php" data-hover="Time-Table"  style="color:black">Time-Table</a></li>
						<li><a href="feedback.php" data-hover="Feedback">Feedback</a></li>
						<li><a href="logout.php" data-hover="Logout">Logout</a></li>
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
<!--header end here-->
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	
	<!--table-->
	 <div class="page-header">
        <h3>Available Package</h3>
      </div>
  <div class="bs-example" data-example-id="simple-table">
    <table class="table">
      <thead>
        <tr>
			<th>#</th>
			<th>Package-Type</th>
			<th>Day</th>
			<th>From</th>
			<th>To</th>
        </tr>
      </thead>
      <tbody>
        <tr>
		<?php
					include"connect.php";
					$i=0;
$q="SELECT t.ID,t.class,t.class_type,t.day1,t.from,t.to,p.ID,p.class_type FROM timetable t,package_type p where t.class_type=p.ID ";
					$run=mysql_query($q);
					while($row=mysql_fetch_assoc($run))
					{
						$i++;
						$member=$_SESSION['uname'];	
						$id=$row['ID'];
						$package=$row['class'];
						$package_type_id=$row['class_type'];
						$day1=$row['day1'];
						$from=$row['from'];
						$to=$row['to'];
		?>	 

	<!--	 
					include"connect.php";
					$member=$_SESSION['uname'];
					$q2="SELECT * FROM member where username='$member'";
					$run2=mysql_query($q2);
					$row3=mysql_fetch_assoc($run2);
					$member_id=$row3['ID'];
					$i=0;
$q="SELECT t.ID,t.class,t.class_type,t.day1,t.from,t.to,b.class_type_id,b.member_id,m.ID FROM timetable t,book_package_type b,member m where t.class_type=b.class_type_id and m.ID=$member_id ";
					$run=mysql_query($q);
					while($row1=mysql_fetch_assoc($run))
					{
						$i++;
						$id=$row1['ID'];
						$package_id=$row1['class'];
						$package_type_id=$row1['class_type'];
						$day1=$row1['day1'];
						$from=$row1['from'];
						$to=$row1['to'];
						$q1="SELECT * FROM Package_type where ID=$package_type_id";
							$run1=mysql_query($q1);
							$row2=mysql_fetch_assoc($run1);
							$package_type=$row2['class_type'];
						
 -->
          <td scope="row"><?php echo $i;?></td>
          <td><?php echo $package_type_id;?></td>
          <td><?php echo $day1;?></td>
          <td><?php echo $from;?></td>
          <td><?php echo $to;?></td>
        </tr>
				<?php } ?>
      </tbody>
    </table>
  </div><!-- /example -->
	<!--//table-->
 
	</div>
</div>
</div>
<!--short codes end here-->
<!--footer start here-->
<?php include"footer.php"; ?>
<!--footer end here-->
</body>
</html>