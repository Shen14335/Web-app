<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM borrowers WHERE id=$id";

if(mysqli_query($connect,$sql))
{
	header('location:view_borrower.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>