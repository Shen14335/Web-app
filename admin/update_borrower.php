<?php

$id = $_POST['hid'];
$ln = $_POST['txtlastname'];
$fn = $_POST['txtfirstname'];
$midint = $_POST['midint'];
$presentedid = $_POST['presentedid'];
$semester = $row['semester'];
$course = $_POST['course'];
$yns = $_POST['yns'];
$contactNo = $_POST['contactNo'];
$Address = $_POST['Address'];
$utype = $_POST['utype'];

include('includes/connection.php');

$sql = "UPDATE borrowers SET
lname = '$ln',
fname ='$fn',
midint = '$midint',
preid = '$presentedid',
semester = '$semester',
course = '$course',
yns = '$yns',
contactNo = '$contactNo', 
utype= '$utype',
Address = '$Address'


WHERE id='$id'";

if(mysqli_query($connect, $sql))
{
	header('location:view_borrower.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>
