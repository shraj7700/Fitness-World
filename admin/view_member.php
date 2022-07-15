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
    <title>Fitness-World | Admin</title>
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
                <a href="#">Member</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Member</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	<?php include('connect.php');
	$id=$_GET['id'];
				    	$q="SELECT * from member where ID=$id";
						$run=mysql_query($q) or die(mysql_error());
while($row = mysql_fetch_assoc( $run ))
{
	$id=$row['ID'];
	$fname=$row['first_name'];
	$mname=$row['middle_name'];
	$email=$row['username'];
	$contact_no=$row['contact_no'];
	$age=$row['age'];
	$gender=$row['gender'];
	$password=$row['password'];
	$image=$row['image'];
	$address=$row['address'];
	$date=$row['join_date'];
	?>
    <tr>
        <th>Username</th>
		<td><?php echo $email;?></td>
	</tr>
	<tr>	
        <th>Password</th>
		<td><?php echo $password;?></td>
		</tr>
	<tr>
        <th>First-Name</th>
		<td><?php echo $fname;?></td>
		</tr>
	<tr>
		 <th>Middle-Name</th>
		 <td><?php echo $mname;?></td>
		 </tr>
	<tr>
		 <th>Address</th>
		 <td><?php echo $address;?></td>
		 </tr>
	<tr>
		 <th>Age</th>
		 <td><?php echo $age;?></td>
		 </tr>
	<tr>
		 <th>Gender</th>
		 <td><?php echo $gender;?></td>
		 </tr>
	<tr>
		 <th>Join Date</th>
		 <td><?php echo $date;?></td>
		 </tr>
	<tr>
		 <th>Contact-No</th>
		 <td><?php echo $contact_no;?></td>
		 </tr>
	<tr>
		 <th>Image</th>
		 <td><img src="member_image\profile\<?php echo $image;?>" height="100px" width="100px"/></td>
    
   </tr>
<?php }?>   
    </tbody>
    </table>
	<form name="frm" method="post" action="member.php">
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
