<?php
$ln = $_POST['txtlastname'];
$fn = $_POST['txtfirstname'];
$midint = $_POST['midint'];
$presentedid = $_POST['presentedid'];
$semester = $_POST['semester'];
$course = $_POST['course'];
$yns = $_POST['yns'];
$contactNo = $_POST['contactNo'];
$Address = $_POST['Address'];
$utype = $_POST['utype'];


include('includes/connection.php');

$sql = "INSERT INTO borrowers VALUES(NULL,'$ln','$fn','$midint','$presentedid', '$semester', '$course', '$yns', '$contactNo', '$Address', '$utype')";



if (mysqli_query($connect,$sql))
{
	header('location:view_borrower.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
