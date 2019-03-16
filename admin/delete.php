<?php
$id =$_REQUEST['id'];

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("Conference", $con);

// sending query
mysql_query("DELETE FROM conference_details WHERE id = '$id'")
or die(mysql_error());      
echo  	$id ,'is deleted';
?>