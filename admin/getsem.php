<?php
mysql_connect("localhost","root","");
mysql_select_db("fitness");


if(isset($_GET['Course_Id'])){
echo "ell";
$semdata = mysql_query('SELECT * FROM package_type WHERE class = "'.$_GET['Course_Id'].'"');
$j = '<option value="">Select</option>';
while($data = mysql_fetch_array($semdata)){
$j .= "<option value=".$data['ID'].">".$data['class_type']."</option>";	
}
echo $j;
}
?>