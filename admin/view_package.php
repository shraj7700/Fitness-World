<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <title>Fitness World | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
   <?php include"header.php";?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Package Type</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Book Package-Type</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	 <?php
						
							include"connect.php";
							$mid=$_GET['mid'];
							$cid=$_GET['cid'];
							$tid=$_GET['tid'];
							$q1="SELECT c.ID,c.class_type,c.time_duration,c.fees,t.name,t.ID,m.ID,m.username,m.first_name,m.middle_name,m.image FROM package_type c,trainer t,member m where m.ID=$mid and c.ID=$cid and t.ID=$tid";
							$run1=mysql_query($q1);
							while($row1=mysql_fetch_assoc($run1))
							{
								$package_type=$row1['class_type'];
								$time_duration=$row1['time_duration'];
								$fees=$row1['fees'];
								$trainer_name=$row1['name'];
								$member_image=$row1['image'];
								$username=$row1['username'];
								$first_name=$row1['first_name'];
								$middle_name=$row1['middle_name'];
								
								$q2="SELECT *FROM book_package_type where member_id=$mid";
								$run2=mysql_query($q2);
								while($row2=mysql_fetch_assoc($run2))
								{
									$date1=$row2['start_date'];
									$date2=$row2['end_date'];
								}

						?>	
</tr>  
	<tr>
		<th>User-name</th>
		<th><?php echo $username;?></th>
		</tr> 
	<tr>
		<th>Name</th>
		<th><?php echo $first_name." ".$middle_name;?></th>
		</tr>	 
	<tr>
		<th>Package-Type ID</th>
		<th><?php echo $cid;?></th>
		</tr>
	<tr>
		<th>Package-Type</th>
		<th><?php echo $package_type;?></th>
		</tr>
	<tr>
		<th>Duration</th>
		<th><?php echo $time_duration;?></th>
		</tr>
	<tr>
		<th>Start Package Date</th>
		<th><?php echo $date1;?></th>
		</tr>
	<tr>
		<th>End Package Date</th>
		<th><?php echo $date2;?></th>
		</tr>
	<tr>
		<th>fees</th>
		<th><?php echo $fees;?></th>
		</tr>
	<tr>
		<th>Trainer Name</th>
		<th><?php echo $trainer_name;?></th>
		</tr>
	<tr>
        <th>Member-Image</th>
        <th><img src="member_image\profile\<?php echo $member_image;?>" height="150px" width="150px"></th>
	</tr>
	
<?php }?>      
    </tbody>
    </table>
	<form name="form" method="post" action="view_book_package.php">
			<div class="form-actions">
				<button type="submit" name="back" class="btn btn-primary">BACK</button>
			</div>
	</form>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

   
    <hr>


  <?php include"footer.php"; ?>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
