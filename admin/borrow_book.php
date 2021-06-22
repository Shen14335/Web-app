<?php
$id = $_GET['bID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM tbl_books where id = '$id'";
	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $bookIsbn = $row['bookIsbn'];
        $bookTitle = $row['bookTitle'];
        $bookAuthor = $row['bookAuthor'];
        $pubisherID = $row['pubisherID'];
        $bookCategory = $row['bookCategory'];
        $bookDescription = $row['bookDescription'];
        $book_status = $row['book_status'];
		
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Borrow this Book</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="add_to_borrowed.php">
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
								<label class="control-label" for="pubisherID">PubisherID</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="pubisherID" id="pubisherID" type="text" value="<?php echo $pubisherID; ?>" disabled>
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookLanguage">BorrowersID</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowersID" id="BorrowersID" type="text">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookCategory">BorrowersName</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowersName" id="BorrowersName" type="text" >
								</div>
							  </div>

                              

							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Borrow this book</button>
                                <input type="hidden" name="hid" value="<?php echo $id; ?>">
							  </div>
							</fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

	<?php
		get_footer();
	?>
