<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location='index.php'</script>";
}
?><!DOCTYPE html>
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
<script>
function GetSem(){
	
	var course_id = document.getElementById('course_name').value;
	var p='';
	if(window.XMLHttpRequest){
		
		p = new XMLHttpRequest();
		
		}
	else {
		
		p = new ActiveXObject('Microsoft.XMLHTTP');
	   }
	p.open('GetSem','getsem.php?Course_Id='+course_id,true);
	p.send();
	p.onreadystatechange = function()
		{
		if(p.readyState == 4)
			{
			document.getElementById('semester').innerHTML=p.responseText;
			}
		}
	
}
</script>
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
            <a href="#">Time-Table</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Time-Table</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post">
			<?php
				function valid($id,$from,$to,$error)
				{
			?> <?php
							if ($error != '')
							{
							echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>'; //Inline CSS
							}
							if($message != '')
							{
							echo '<div style="padding:4px; border:1px solid green; color:green;">'.$message.'</div>';
							}
	           ?>
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
							<div class="form-group">
								<label for="exampleInputEmail1">Select Package Month Duration</label>
								<div class="controls">
									<select  name="course_name" id="course_name" onchange="GetSem()"  class="form-control">
									<option>Select</option>
                            	<?php
										include"connect.php";
        								$r=mysql_query("select * from package");
					
										while($row=mysql_fetch_array($r))
										{
											echo "<option value='$row[0]'>$row[1]</option>";
										}			           
       							 ?> 
									</select>
                    </div><br>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Select Package-Type</label>
						 <div class="controls">
                         <select name="semester" id="semester" values="semester" class="form-control">
                            <option>Select</option>
							<?php
							include"connect.php";
							$q1="select * from package_type";
							$run1=mysql_query($q1);
							while($row=mysql_fetch_assoc($run1))
							{
								$package=$row['class_type'];
						?>	
						<option><?php echo $package;?></option>
							<?php }?>   

                        </select>
                    </div><br>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Select Day</label>
						 <div class="controls">
                         <select id="selectError" class="form-control" name="day">
							<option>Select</option>
                            <option value="Everyday">Everyday</option>
                            <option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div><br>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Time</label><br>
						From<input type="time" class="form-control" id="exampleInputEmail1" name="from" value="<?php echo $from;?>">To <input type="time" class="form-control"  value="<?php echo $to;?>" id="exampleInputEmail1" name="to">
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>
	<?php
}
include("connect.php");
if(isset($_POST["submit"]))
{
        $id=$_POST['id'];
		if (is_numeric($_POST['id']))
		{
				$package=$_POST["course_name"];
	            $package_type=$_POST["semester"];
				$day=$_POST["day"];
				$from=$_POST["from"];
	            $to=$_POST["to"];
	                     
mysql_query("UPDATE  `fitness`.`timetable` SET `class`='$package',`class_type`='$package_type',`day1` =  '$day',`from`='$from',`to`='$to' WHERE `timetable`.`ID` ='$id' ")or die(mysql_error());
				header("Location: manage_timetable.php");
				
				mysql_close($con);			
		}
		else
		{
			echo 'Error!';
		}
	}
else
	{
			if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
			{
				$id = $_GET['id'];
				$result = mysql_query("SELECT * FROM timetable WHERE ID=$id")or die(mysql_error());
				$row = mysql_fetch_array($result);
				if($row)
				{
					$id=$row['ID'];		
					$from=$row['from'];
					$to=$row['to'];
	
					valid($id,$from,$to,'');
				}
                else
				{
					echo "No results!";
				}
			}
			else
			{
			echo 'Error!2';
			}
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

<?php include"footer.php";?>

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

