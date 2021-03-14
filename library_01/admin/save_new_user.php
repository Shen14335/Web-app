<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];


include('includes/connection.php');

$sql = "INSERT INTO admin VALUES(NULL,'$fn','$ln','$un','$pw')";



if (mysqli_query($connect,$sql))
{
	header('location:view_user.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
