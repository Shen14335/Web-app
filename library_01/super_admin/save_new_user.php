<?php
$user_types = $_POST['user_types'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];

include('includes/connection.php');

if($user_types == 'Librarian')
{
	$sql = "INSERT INTO admin VALUES(NULL,'$fn','$ln','$un','$pw')";
}else
{
	$sql = "INSERT INTO super_admin VALUES(NULL,'$fn','$ln','$un','$pw')";
}


if (mysqli_query($connect,$sql))
{
	header('location:view_user.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
