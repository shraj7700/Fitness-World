<?php
include('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysql_query("DELETE FROM gallery WHERE ID=$id")or die(mysql_error());
	
	header("Location: gallery.php");
}
else

{
header("Location: gallery.php");
}
?>
