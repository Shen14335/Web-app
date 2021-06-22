<?php
$bookCategory = $_POST['bookCategory'];

include('includes/connection.php');

$sql = "INSERT INTO bookcategory VALUES(NULL,
'$bookCategory'
)";



if (mysqli_query($connect,$sql))
{
	header('location:view_categories.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
