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
            <a href="#">Trainer</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Trainer</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
				<?php
function valid($id,$name,$email,$address,$dob,$age,$contact,$degree,$doj,$image,$error)
				
{
?><input type="hidden" name="id" value="<?php echo $id; ?>"/>
              
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name"  value="<?php echo $name; ?>"class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
						<textarea rows="3" class="form-control" id="exampleInputEmail1" name="address"><?php echo $address; ?></textarea>
					</div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <input type="radio" name="gender" value="male" id="exampleInputEmail1" placeholder="Enter Author">Male
						 <input type="radio" name="gender" value="female" id="exampleInputEmail1" placeholder="Enter Author">Female
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">DOB</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" id="exampleInputEmail1">
    
	</div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $age; ?>" id="exampleInputEmail1" placeholder="Enter Age">
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Contact</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>" id="exampleInputEmail1" placeholder="Enter Contact">
                    </div> 
					 <div class="form-group">
                        <label for="exampleInputEmail1">Joining Date</label>
                        <input type="date" class="form-control" name="doj" value="<?php echo $doj; ?>" id="exampleInputEmail1">
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Degree</label>
                        <input type="text" class="form-control" name="degree" value="<?php echo $degree; ?>" id="exampleInputEmail1" placeholder="Enter Degree">
                    </div>
					           <div class="form-group">
                        <label for="exampleInputEmail1">Select Package</label>
						 <div class="controls">
                         <select class="form-control" name="course_name" id="course_name" onchange="GetSem()" >
                            <option>Select</option>
                            <?php
													require_once('connect.php');
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
                         <select class="form-control" name="semester" id="semester">
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
                        <label for="exampleInputFile">Image</label>
                       <input type="hidden" name="image1" value="<?php echo $image; ?>"/>
						 <input type="file" name="flupload" id="exampleInputFile">
								<image src="trainer/<?php echo $image; ?>" height="100px" width="100px" />
                         </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>
	<?php
}
	include("connect.php");
	if(isset($_POST["submit"]))
	{
        $id=$_POST['id'];
		if (is_numeric($_POST['id']))
		{
						$name=$_POST["name"];
	                    $address=$_POST["address"];
						$gender=$_POST["gender"];
						$dob=$_POST["dob"];
	                    $age=$_POST["age"];
	                    $email=$_POST["email"];
	                    $contact=$_POST["contact"];
						$doj=$_POST["doj"];
						$degree=$_POST["degree"];
	                    $class=$_POST["course_name"];
	                    $class_type=$_POST["semester"];
	                      
			if($_FILES["flupload"]["name"]==true)
			{
			$name1=$_FILES["flupload"]["name"];
			$tname=$_FILES["flupload"]["tmp_name"];
			$path="trainer/$name1";
		
				if(move_uploaded_file($tname,$path)==true)
				{
mysql_query("UPDATE trainer SET name='$name', address='$address', gender='$gender', dob='$dob', age='$age',email='$email', contact='$contact', doj='$doj', degree='$degree', class_ID='$class',class_type_ID='$class_type', image='$name1'  WHERE ID='$id'")or die(mysql_error());
header("Location: manage_trainer.php");
				}
				else
				{
					echo "Data is Not Updated..........";
				}
				mysql_close($con);
			}
			else
			{
				$name1=$_POST["image1"];
mysql_query("UPDATE trainer SET name='$name', address='$address', gender='$gender', dob='$dob', age='$age',email='$email', contact='$contact', doj='$doj', degree='$degree', class_ID='$class',class_type_ID='$class_type', image='$name1'  WHERE ID='$id'")or die(mysql_error());
header("Location: manage_trainer.php");
			}
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
				$result = mysql_query("SELECT * FROM trainer WHERE ID=$id")or die(mysql_error());
				$row = mysql_fetch_array($result);
				if($row)
				{
					$id=$row['ID'];
					$name=$row['name'];
					$email=$row['email'];
					$address=$row['address'];
					$dob=$row['dob'];
					$age=$row['age'];
	
					$contact=$row['contact'];
					$degree=$row['degree'];
					$doj=$row['doj'];
					$image=$row['image'];
	
					valid($id,$name,$email,$address,$dob,$age,$contact,$degree,$doj,$image,'');
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

