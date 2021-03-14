<?php
date_default_timezone_set("Asia/Manila");

$hid_book_id = $_POST['hid_book_id'];
$BorrowersID = $_POST['BorrowersID'];
//$dueDate = NOW() ->modify('+7 day');

$dueDate = date('Y-m-d', strtotime("+7 day"));

include('includes/connection.php');

$sql = "INSERT INTO borrowed_books VALUES(NULL,'$hid_book_id','$BorrowersID',NOW(),'$dueDate', 'NULL')";



if (mysqli_query($connect,$sql))
{
    $sql = "UPDATE tbl_books SET book_status='Borrowed' WHERE id='$hid_book_id'";

	    if (mysqli_query($connect,$sql))
        {
            header('location:borrowed_book.php');
        }
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
