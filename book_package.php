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
<title>Fitness-World | Package</title>
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
		<li><a href="trainer.php"  data-hover="Trainer">Trainer</a></li>
			<li><a href="package.php"  data-hover="Package"  style="color:black">Package</a></li>
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
	
  
<!--Forms-->
	<div class="page-header">
        <h3>Book Your Package</h3>
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" method="get">
      <div class="form-group">
	  <?php $cid=$_GET['cid'];
	  ?>
	  <input type="hidden" name="class_type_id" value="<?php echo $cid;?>">
	  <?php
							include"connect.php";
							$q="SELECT * FROM package_type where ID=$cid";	
							$run=mysql_query($q);
							$row1=mysql_fetch_assoc($run);
							$package_type=$row1['class_type'];
							$time_duration=$row1['time_duration'];
							$fees=$row1['fees'];
		?>					
		
        <label for="inputEmail3" class="col-sm-2 control-label">Package-Type</label>
        <div class="col-sm-3">
			<input type="text" class="form-control" id="inputEmail3" name="package" value="<?php echo $package_type;?>" readonly>
        </div>
      </div>
		<div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Time-Duration</label>
        <div class="col-sm-3">
			<input type="text" class="form-control" id="inputPassword3" name="time_duration" value="<?php echo $time_duration;?>" readonly>
        </div>
		</div>
	    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Fees</label>
        <div class="col-sm-3">
			<input type="text" class="form-control" id="inputPassword3" name="fees" value="<?php echo $fees;?>" readonly>
        </div>
		</div>
		<div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Trainer</label>
        <div class="col-sm-3">
			<select name="trainer" class="form-control">
			<option>Select</option>

		  <?php
		
			require_once('connect.php');
        	$r=mysql_query("select *from trainer where class_type_ID=$cid");
			if(mysql_num_rows($r))
			{
				while($row=mysql_fetch_row($r))
				{
					echo "<option value='$row[0]'>$row[1]</option>";
				}
			}
			else
			{
					echo "<option value=''>No Option</option>";
			}
			?>
			</select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-default" name="submit" value="CONFIRM BOOKING"/>
<!--          <button type="submit" class="btn btn-default" name="submit"><a href="confirm_package_book.php?cid=<?php echo $cid?>&m_id=<?php echo $member_id?>&tid=<?php echo $trainer_id?>">CONFIRM BOOKING</a></button>  -->
        </div>
      </div>
    </form>
  </div>
  <?php
					include("connect.php");
						if(isset($_GET["submit"]))
                        {		
							$pid=$_GET['class_type_id'];
							$member=$_SESSION['uname'];
	                     $q3="select *from package_type where ID=$pid";
							$run3=mysql_query($q3);
							$row3=mysql_fetch_assoc($run3);
							$package_iid=$row3['ID'];
							$trainer_id=$_GET['trainer'];
							$date1=date('Y-m-d');
						   
	                    $q2="select *from member where username='$member'";
							$run2=mysql_query($q2);
							$row2=mysql_fetch_assoc($run2);
							$member_id=$row2['ID'];
												
						$q4="select *from package_type where ID=$pid";
							$run4=mysql_query($q4);
							$row4=mysql_fetch_assoc($run4);
							$class_id=$row4['class'];
						
						$q5="select *from package where ID=$class_id";
							$run5=mysql_query($q5);
							$row5=mysql_fetch_assoc($run5);
							$total_month=$row5['class'];	
						//	$time=strtotime('2020-01-01');
						//	$end_date=date('Y-m-d', strtotime("+12 months", strtotime($date1)));
							$end_date=date('Y-m-d', strtotime("+$total_month months", strtotime($date1)));
							
mysql_query("INSERT INTO `fitness`.`book_package_type`(`ID`,`class_type_id`,`member_id`,`trainer_id`,`start_date`,`end_date`) VALUES (Null,'$package_iid','$member_id','$trainer_id','$date1','$end_date')")or die(mysql_error());
$message = 'Package Booked Successfully!!!!!!!!!!';
echo '<script>alert("Your Package Booked Successfully !!!");</script>';
// echo $message;
echo "";
header("Location: confirm_package_book.php?cid=$package_iid&m_id=$member_id&tid=$trainer_id");
				}?>
	<!--//forms-->
 
	</div>
</div>
</div>
<!--short codes end here-->
<!--footer start here-->
<?php include"footer.php"; ?>
<!--footer end here-->
</body>
</html>