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

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<?php
function valid($package,$package_type,$details,$time_duaration,$fees,$error)
{
?>
    <!-- topbar starts -->
   <?php include"header.php"; ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Package-Type</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Package-Type</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content">
       <form role="form" action="" method="post" autocomplete="off">
                
                         <?php
							if ($error != '')
							{
							echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>'; //Inline CSS
							}
							if($message != '')
							{
							echo '<div style="padding:4px; border:1px solid green; color:green;">'.$message.'</div>';
							}
	                      ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Package Month Duration</label>
						 <div class="controls">
                         <select id="selectError" class="form-control" data-rel="chosen" name="package">
                            <option>Select</option>
                                <?php
		
			require_once('connect.php');
        	$r=mysql_query("select *from package");
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
                        <label for="exampleInputEmail1">Package-Type Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Package-Type Name" name="package_type">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
						<textarea rows="3" class="form-control" name="details"></textarea>
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Time-Duration</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter time-Duartion" name="time_duration">
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Fees</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter fees" name="fees">
                    </div>                   
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>
			<?php
						}
						include("connect.php");
						if(isset($_POST["submit"]))
                        {
							$package=$_POST["package"];
							$package_type=$_POST["package_type"];
							$details=$_POST["details"];
							$time_duration=$_POST["time_duration"];
							$fees=$_POST["fees"];
	                    	if ($package == '' || $package_type == '' || $details=='' || $time_duration == '' || $fees=='')
							{
									$error = 'Please enter the details!';
									valid($package,$package_type,$details,$time_duration,$fees,$error);
							}
							else
							{
								
mysql_query("INSERT INTO `fitness`.`package_type`(`ID`,`class`,`class_type`,`Details`,`time_duration`,`fees`)VALUES (Null,'$package','$package_type','$details','$time_duration','$fees')")or die(mysql_error());
$message = 'Your Information Is Sucessfully Save';
valid('','','','','',$message);
header("Location: add_package_type.php");
							}
						}
						else
						{
							valid('','','','','','');
						}
					?>
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

