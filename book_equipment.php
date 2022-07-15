<?php
require_once('connect.php');
session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness-World | Equipment</title>
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
        <h3>Book Equipment</h3>
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
							$q="SELECT * FROM equipment where ID=$id";
							$run=mysql_query($q);
							while($row1=mysql_fetch_assoc($run))
							{
								$id=$row1['ID'];
								$image=$row1['image'];
								$name=$row1['name'];
								$details=$row1['details'];
								$price=$row1['price'];
								$date=date("y-m-d");
								
								$uname=$_SESSION['uname'];
								$q1="SELECT * from member where username='$uname'";
								$run1=mysql_query($q1);
								$row2=mysql_fetch_assoc($run1);
								$mid=$row2['ID'];
								
								$q2="update equipment set stock=stock-1 where ID=$id";	
								mysql_query($q2);
								
								$q3="insert into book_equipment(`ID`,`equipment_id`,`member_id`,`pure_date`)values('','$id','$mid','$date')";
								mysql_query($q3);
						?>	 

	 <tr>
	 <td colspan="2" style="color:red">
	 Note: Take a print-out of this page and Approved by Fitness World incharge.
	 
	 </td>
	 </tr>       
	   <tr>
          <th>Image</th>
          <th><img src="admin\equipment\<?php echo $image;?>" height="280px" width="280px"></th>
        </tr>
		<tr>
			<th>Name</th>
			<th><?php echo $name;?></th>
     </tr>
	 <tr>
			<th>Details</th>
			<th><?php echo $details;?></th>
     </tr>
	 <tr>
			<th>Price</th>
			<th><?php echo $price;?></th>
     </tr>
	 
	 <tr>
	 <td colspan="2" style="color:Green;align-center:true;font-size:30px" >
	Equipment Book SuccessFully!!
	 
	 </td>
	 </tr>
					<?php } ?>
      </tbody>
    </table>
  </div>
     <div class="contact-bottom">
			  <form action="index.php">
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