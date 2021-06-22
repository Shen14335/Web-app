<?php

$id = $_POST['hid'];
$bookIsbn = $_POST['bookIsbn'];
        $AccessionNumber = $_POST['AccessionNumber'];
        $DateRecieved = $_POST['DateRecieved'];
        $Class = $_POST['Class'];
        $bookTitle = $_POST['bookTitle'];
        $bookAuthor = $_POST['bookAuthor'];
        $Edition = $_POST['Edition'];
        $Volume = $_POST['Volume'];
        $Pages = $_POST['Pages'];

        $SourceOfFund = $_POST['SourceOfFund'];
        $CostPrice = $_POST['CostPrice'];
        $pubisherID = $_POST['pubisherID'];
        $YearBook = $_POST['YearBook'];
        $bookCategory = $_POST['bookCategory'];
        $bookDescription = $_POST['bookDescription'];
        $book_status = $_POST['book_status'];
        $Remarks = $_POST['Remarks'];


include('includes/connection.php');

$sql = "UPDATE tbl_books SET
bookIsbn = '$bookIsbn',
AccessionNumber ='$AccessionNumber',
DateRecieved = '$DateRecieved',
Class = '$Class',
bookTitle = '$bookTitle',
bookAuthor = '$bookAuthor',
Edition = '$Edition', 
Volume = '$Volume', 
Pages = '$Pages', 
SourceOfFund = '$SourceOfFund', 
CostPrice = '$CostPrice', 
pubisherID = '$pubisherID', 
YearBook = '$YearBook', 
bookCategory = '$bookCategory', 
bookDescription = '$bookDescription', 
Remarks = '$Remarks'
WHERE id='$id'";

if(mysqli_query($connect, $sql))
{
	header('location:view_all_books.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>
