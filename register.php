<?php
require_once('connect.php');
session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fitness World | Login</title>
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
<!-- animated-css 
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>-->
<!-- animated-css -->
 <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
function valid($username,$password,$confirm_password,$first_name,$middle_name,$age,$contact_no,$address,$gender,$error,$message)
{
?>
<!--header start here-->
<!-- NAVBAR
==================================================-->
<?php include"header.php";?>
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	
	<!--Forms-->
	<div class="page-header">
        <h3>Register</h3>
      </div>
   <div class="contact-bottom">
		<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
			  <?php
							if($error != '')
							{
								echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>'; //Inline CSS
							}
							
							if($message != '')
							{
								echo '<div style="padding:4px; border:1px solid blue; color:blue;">'.$message.'</div>';
							}
	            ?>
		<div class="col-md-7 contact-left wow slideInLeft" data-wow-delay="0.3s">
			<p>Username/Email-id</p>
		      <input type="email" name="email" value="<?php echo $username; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
			
			<p>Password</p>
			  <input type="password" name="password" value="<?php echo $password; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			
			<p>Confirm-Password</p>
		      <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			
			<p>First-Name</p>
			  <input type="text" value="<?php echo $first_name; ?>" name="first_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
					
			<p>Middle-Name</p>
		      <input type="text" value="<?php echo $middle_name; ?>" name="middle_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			
			<p>Age</p>
		      <input type="text" value="<?php echo $age; ?>" name="age" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			
			<p>Contact No</p>
			  <input type="text" value="<?php echo $contact_no; ?>" name="contact_no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
					
			<p>Address</p>
			  <textarea rows="2" col="2" name="address"><?php echo $address; ?></textarea>
			
			<p>Gender</p>
		       <input type="radio" name="gender" value="male" />Male
			   <input type="radio" name="gender" value="female"/>Female
					<br><br>
					 
			<p>Image</p>
				<input type="file" name="flupload" />
					
				<input type="submit" value="REGISTER" name="submit"><br><br>
		</div>
				<div class="clearfix"> </div>
	</form>
		<?php
		}
		include("connect.php");
		if(isset($_POST["submit"]))
		{
			$username=$_POST["email"];
			$password=$_POST["password"];
			$confirm_password=$_POST["confirm_password"];
			$first_name=$_POST["first_name"];
			$middle_name=$_POST["middle_name"];
			$age=$_POST["age"];
			$contact_no=$_POST["contact_no"];
			$address=$_POST["address"];
			$gender=$_POST["gender"];
			$name=$_FILES["flupload"]["name"];
			$tname=$_FILES["flupload"]["tmp_name"];
			$path="profile/$name";
			$date=date("Y-m-d");
			$contact=$contact_no;
			$count_no=0;
			while($contact>0)
			{
				$rem=$contact%10;
				if($rem<=9)
				{
					$count_no++;
				}
				$contact=(int)($contact/10);
			}
			
			if ($username == '' || $password == '' || $confirm_password=='' || $first_name == '' || $middle_name=='' || $age=='' || $contact_no=='' || $address=='' || $gender=='')
			{
				$error = 'Please enter the details!';
				valid($username, $password,$confirm_password,$first_name,$middle_name,$age,$contact_no,$address,$gender,$error);
			}
			else
			{
				if($count_no == 10 or $count_no == 12)
				{				
					if($password==$confirm_password)
					{
						$name=$_FILES["flupload"]["name"];
						$tname=$_FILES["flupload"]["tmp_name"];
						$path="admin/member_image/profile/$name";
						//$path="profile/$name";
						if(move_uploaded_file($tname,$path)==true)
						{
mysql_query("INSERT INTO `fitness`.`member`(`ID`,`join_date`,`username`,`password`,`first_name`,`middle_name`,`age`,`contact_no`,`address`,`gender`,`image`)VALUES (Null,'$date','$username','$password','$first_name','$middle_name','$age','$contact_no','$address','$gender','$name')")or die(mysql_error());
$message = 'Your Information Is Sucessfully Save And Login Now';
valid('','','','','','','','','','',$message);
header("Location: login.php");
						}
						else
						{
							$error = 'Please choose the your image !';
							valid($username,$password,$confirm_password,$first_name,$middle_name,$age,$contact_no,$address,$gender,$error);											
						}
					}
					else
					{
						$error = 'Password and confirm password are not same !';
						valid($username,$password,$confirm_password,$first_name,$middle_name,$age,$contact_no,$address,$gender,$error);
					}
				}
				else
				{
					$error = 'Please enter valid contact no !';									
					valid($username, $password,$confirm_password,$first_name,$middle_name,$age,$contact_no,$address,$gender,$error);
				}
			}
		}
		else
		{
			valid('','','','','','','','','','');
		}
		?>
			</div>
	
	</div>
</div>
</div>
<!--short codes end here-->
<?php include"footer.php"; ?>
</body>
</html>