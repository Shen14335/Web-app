<?php

$id = $_POST['hid'];
$ln = $_POST['lname'];
$fn = $_POST['fname'];
$un = $_POST['un'];
$ps = $_POST['ps'];

include('includes/connection.php');

$sql = "UPDATE super_admin SET
lname = '$ln',
fname ='$fn',
un = '$un',
ps = '$ps'
WHERE id='$id'";

if(mysqli_query($connect, $sql))
{
	header('location:view_user.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>
