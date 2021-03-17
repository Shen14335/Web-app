<?php
date_default_timezone_set("Asia/Manila");

$hid_book_id = $_POST['hid_book_id'];
$BorrowersID = $_POST['BorrowersID'];
//$dueDate = NOW() ->modify('+7 day');

$dueDate = date('Y-m-d', strtotime("+3 day"));
// add payment fine here

include('includes/connection.php');
$sql ="SELECT * FROM tbl_books where id = '$hid_book_id'";
	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $book_status = $row['book_status'];
        
	}

$sql ="SELECT count(*) as bor_no FROM borrowers where preid = '$BorrowersID'";
    $result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$usercount = $row['bor_no'];
        
	}

if($book_status != "Available" or $usercount != 1)
{
    header('location:error.php');

}else{

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
}

        

?>
