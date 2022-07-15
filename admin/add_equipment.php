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
<?php include"header.php"; ?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Equipment</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Equipment</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post"  enctype="multipart/form-data" autocomplete="off">
     <?php
function valid( $name, $details,$price,$stock,$error)
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
				               <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"name="name" value="<?php echo $name;?>">
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
						<textarea rows="4" class="form-control" id="exampleInputEmail1" name="details"> <?php echo $details;?></textarea>
					</div>
					<div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <input type="file" id="exampleInputFile" name="flupload">                       
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" name="price"  value="<?php echo $price;?>">
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Stock</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Stock" name="stock"  value="<?php echo $stock;?>">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>
 <?php
						}
						include("connect.php");
						if(isset($_POST["submit"]))
                        {
	                       $name=$_POST["name"];
	                       $details=$_POST["details"];
	                       $price=$_POST["price"];
							$stock=$_POST["stock"];
	                       $name1=$_FILES["flupload"]["name"];
							$tname=$_FILES["flupload"]["tmp_name"];
							$path="equipment/$name1";
	
	                    	if ($name == '' || $details == '' || $price=='' || $stock == '')
							{
									$error = 'Please enter the details!';
									valid($name, $details,$price,$stock,$error);
							}
							else
							{
									
								if(move_uploaded_file($tname,$path)==true)
									{
mysql_query("INSERT INTO `fitness`.`equipment`(`ID`,`name`,`details`,`image`,`stock`,`price`)VALUES (Null,'$name','$details','$name1','$stock','$price')")or die(mysql_error());
$message = 'Your Information Is Sucessfully Save';
valid('','','','','','','','','','',$message);
header("Location: add_equipment.php");
									}
									else
									{
										echo "Sorry !! Data not inserted!!";
									}
								
							}
						}
						else
						{
							valid('','','','','');
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

