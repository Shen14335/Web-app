<?php

$bor_id = $_POST['hid_01'];
$book_id = $_POST['hid_02'];

include('includes/connection.php');





$sql = "UPDATE borrowed_books SET return_date = NOW() WHERE id='$bor_id'";

if(mysqli_query($connect, $sql))
{
    $sql = "UPDATE tbl_books SET book_status = 'Available' WHERE id='$book_id'";
	if(mysqli_query($connect, $sql))
        {
            header('location:view_returned.php');
        }
        else
        {
            die('Unable to update record: ' .mysql_error());
        }
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>
