<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	
	$result = mysql_query("DELETE FROM timetable WHERE ID=$id")or die(mysql_error());
	
	header("Location: manage_timetable.php");
}
else

{
header("Location: manage_timetable.php");
}
?>
