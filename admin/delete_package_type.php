<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	
	$result = mysql_query("DELETE FROM package_type WHERE ID=$id")or die(mysql_error());
	
	header("Location: manage_package_type.php");
}
else

{
header("Location: manage_package_type.php");
}
?>
