<?php
// $AdminAutoId = $_POST['uAid'];
$pw = $_POST['txtpassword'];
$id = $_GET['id'];
echo $id;

include('includes/connection.php');

$sql = "UPDATE admin SET password='$pw' WHERE id='".$id."' ";

if(mysql_query($sql))
{
	header('location:logout.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>