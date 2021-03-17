<?php
$ln = $_POST['txtlastname'];
$fn = $_POST['txtfirstname'];
$midint = $_POST['midint'];
$presentedid = $_POST['presentedid'];

$course = $_POST['course'];
$yns = $_POST['yns'];
$contactNo = $_POST['contactNo'];
$Address = $_POST['Address'];
$user_types = $_POST['user_types'];


include('includes/connection.php');

$sql = "INSERT INTO borrowers VALUES(NULL,'$ln','$fn','$midint','$presentedid', '$course', '$yns', '$contactNo', '$Address', '$user_types')";



if (mysqli_query($connect,$sql))
{
	header('location:view_borrower.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
