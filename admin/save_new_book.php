<?php
$bookIsbn = $_POST['bookIsbn'];
$AccessionNumber = $_POST['AccessionNumber'];
$DateRecieved = $_POST['DateRecieved'];
$Class = $_POST['Class'];
$bookAuthor = $_POST['bookAuthor'];
$bookTitle = $_POST['bookTitle'];
$Edition = $_POST['Edition'];
$Volume = $_POST['Volume'];
$Pages = $_POST['Pages'];
$SourceOfFund = $_POST['SourceOfFund'];
$CostPrice = $_POST['CostPrice'];
$pubisherID = $_POST['pubisherID'];
$YearBook = $_POST['YearBook'];
$bookCategory = $_POST['bookCategory'];
$bookDescription = $_POST['bookDescription'];


include('includes/connection.php');

$sql = "INSERT INTO tbl_books VALUES(NULL,
'$bookIsbn',
'$AccessionNumber',
'$DateRecieved',
'$Class',
'$bookTitle',
'$bookAuthor',
'$Edition', 
'$Volume', 
'$Pages', 
'$SourceOfFund', 
'$CostPrice', 
'$pubisherID', 
'$YearBook', 
'$bookCategory', 
'$bookDescription', 
'Available',
'No Remarks')";



if (mysqli_query($connect,$sql))
{
	header('location:view_book.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>
