<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM tbl_books WHERE id=$id";

if(mysqli_query($connect,$sql))
{
	header('location:view_all_books.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>