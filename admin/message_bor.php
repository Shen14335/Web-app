<?php
$id = $_GET['bID'];

	include('includes/connection.php');

	$sql = "SELECT tbl_books.id as id, tbl_books.bookTitle as bookTitle, borrowers.fname as fname, borrowers.lname as lname, borrowed_books.borrowed_date as borrowed_date, borrowed_books.due_date as due_date, borrowers.contactno as contactno FROM borrowed_books 
                                join tbl_books on borrowed_books.book_id = tbl_books.id
                                join borrowers on borrowed_books.borrower_id = borrowers.preid
                                ORDER BY tbl_books.id";
								$result=mysqli_query($connect, $sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $bookTitle = $row['bookTitle'];
        $fname = $row['fname'];
        $contactno = $row['contactno'];
		
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Message</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="message_sent.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="bookTitle">Book Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookTitle" id="bookTitle" type="text" value="<?php echo $bookTitle; ?>" disabled> 
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="BorrowerName">Borrower Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowerName" id="BorrowerName" type="text" value="<?php echo $fname; ?>" disabled>
                                  <input type="hidden" name="hid_book_id" value="<?php echo $id; ?>">
								</div>
							  </div>


							  <div class="control-group">
								<label class="control-label" for="BorrowerContactNo">Borrower Contact No</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="BorrowerContactNo" id="BorrowerContactNo" type="text" value="<?php echo $contactno; ?>" disabled>
								  <input type="hidden" name="contactno" value="<?php echo $contactno; ?>">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="Message">Message</label>
								<div class="controls">
								  
								  <textarea id="Message" name="Message" rows="4" cols="50" placeholder="Message Here"></textarea>
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Send</button>
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
