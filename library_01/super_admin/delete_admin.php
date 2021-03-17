<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM super_admin WHERE id=$id";

if(mysqli_query($connect,$sql))
{
	header('location:view_user.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>