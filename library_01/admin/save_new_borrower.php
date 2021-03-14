<?php
$presentedid = $_POST['presentedid'];
$user_types = $_POST['user_types'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$contactNo = $_POST['contactNo'];


include('includes/connection.php');

$sql = "INSERT INTO borrowers VALUES(NULL,'$fn','$ln','$presentedid','$user_types', '$contactNo')";



if (mysqli_query($connect,$sql))
{
	header('location:view_borrower.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
