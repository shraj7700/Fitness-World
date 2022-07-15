<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	
	$result = mysql_query("DELETE FROM student WHERE stu_id=$id")or die(mysql_error());
	
	header("Location: manage_student.php");
}
else

{
header("Location: manage_student.php");
}
?>
