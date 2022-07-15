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
                <a href="#">Inquiry</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Inquiry Replay</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	<form name="frm" method="get" action="">
<?php
function valid($id,$Name,$Email_id1,$Question,$Answer,$q_date,$a_date,$error)
				
{
?><input type="hidden" name="id" value="<?php echo $id; ?>"/>
      <tr>
        <th>Name</th>
		<td><?php echo $Name; ?><input type="hidden" name="Name" value="<?php echo $Name; ?>" readonly></td>
	</tr>
	 <tr>
        <th>Email-Id</th>
		<td><?php echo $Email_id1; ?><input type="hidden" name="Email_id1" value="<?php echo $Email_id1; ?>" readonly></td>
	</tr>            
   <tr>
        <th>Qusetion</th>
		<td><?php echo $Question;?><input type="hidden" name="Question" value="<?php echo $Question; ?>" readonly></td>
	</tr>
	 <tr>
        <th>Question Date</th>
		<td><?php echo $q_date; ?><input type="hidden" name="q_date" value="<?php echo $q_date; ?>" readonly></td>
	</tr>
	<tr>	
        <th>Answer</th>
		<td><textarea name="Answer" ><?php echo $Answer; ?></textarea></td>
	</tr>
	<tr>	
        <th>Answer Date</th>
		<td><?php echo $a_date; ?></td>
	</tr>
    </tbody>
    </table>
					  <div class="form-actions">
							<button type="submit" name="submit" class="btn btn-primary">Replay</button>
					   </div>          
					   </form>
					   <?php
}
include("connect.php");
if(isset($_GET["submit"]))
{
        $id=$_GET['id'];
		$Name=$_GET["Name"];
		$Email_id1=$_GET["Email_id1"];
		$Question=$_GET["Question"];
	    $q_date=$_GET["q_date"];
		$a_date=date("d/m/Y");
		$Answer=$_GET["Answer"];
	                       
mysql_query("UPDATE inquiry SET Answer='$Answer',a_date='$a_date'  WHERE ID='$id'")or die(mysql_error());
header("Location: inquire.php");			
			mysql_close($con);
	}
else
	{
			if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
			{
				$id = $_GET['id'];
				$result = mysql_query("SELECT * FROM inquiry WHERE ID=$id")or die(mysql_error());
				$row = mysql_fetch_array($result);
				if($row)
				{
					$id=$row['ID'];
					$Name=$row['Name'];
					$Email_id1=$row['Email_id1'];
					$Question=$row['Question'];	
					$Answer=$row['Answer'];
					$q_date=$row['q_date'];	
					$a_date=$row['a_date'];
	
				valid($id,$Name,$Email_id1,$Question,$Answer,$q_date,$a_date,'');
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
