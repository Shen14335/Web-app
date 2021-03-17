<?php
$id = $_GET['mID'];

	include('includes/connection.php');
    $sql = "SELECT borrowed_books.id as main_id, 
                   borrowers.id as bor_id, 
                   tbl_books.bookTitle as bookTitle, 
                   tbl_books.bookIsbn as bookIsbn,
                   tbl_books.bookAuthor as bookAuthor,  
                   tbl_books.pubisherID as pubisherID,  
                   tbl_books.id as book_id,
                   borrowers.fname as fname, 
                   borrowers.lname as lname, 
                   borrowed_books.borrowed_date as borrowed_date, 
                   borrowed_books.due_date as due_date, 
                   borrowed_books.return_date as return_date 
								FROM borrowed_books 
                                join tbl_books on borrowed_books.book_id = tbl_books.id
                                join borrowers on borrowed_books.borrower_id = borrowers.preid
								where borrowed_books.id = '$id'";

	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['main_id'];
        $book_id = $row['book_id'];
        $bookIsbn = $row['bookIsbn'];
        $bookTitle = $row['bookTitle'];
        $bookAuthor = $row['bookAuthor'];
        $borrowed_date = $row['borrowed_date'];
        $bor_id = $row['bor_id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
		
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Return this Book</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="add_to_returned.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="bookTitle">Book Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookTitle" id="bookTitle" type="text" value="<?php echo $bookTitle; ?>" disabled> 
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookIsbn">ISBN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookIsbn" id="bookIsbn" type="text" value="<?php echo $bookIsbn; ?>" disabled>
                                  <input type="hidden" name="hid_book_id" value="<?php echo $id; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="bookAuthor">Author</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookAuthor" id="bookAuthor" type="text" value="<?php echo $bookAuthor; ?>" disabled>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="bdate">Borrowed Date</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bdate" id="bdate" type="text" value="<?php echo $borrowed_date; ?>" disabled>
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookLanguage">BorrowersID</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowersID" id="BorrowersID" type="text" value="<?php echo $bor_id; ?>" disabled>
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookCategory">BorrowersName</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowersName" id="BorrowersName" type="text" value="<?php echo $fname." ".$lname; ?>" disabled>
								</div>
							  </div>

                              

							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Return this book</button>
                                <input type="hidden" name="hid_01" value="<?php echo $id; ?>">
                                <input type="hidden" name="hid_02" value="<?php echo $book_id; ?>">
							  </div>
							</fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

	<?php
		get_footer();
	?>
