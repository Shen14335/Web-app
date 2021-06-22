<?php
$id = $_GET['bID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM tbl_books where id = '$id'";
	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $bookIsbn = $row['bookIsbn'];
        $AccessionNumber = $row['AccessionNumber'];
        $DateRecieved = $row['DateRecieved'];
        $Class = $row['Class'];
        $bookTitle = $row['bookTitle'];
        $bookAuthor = $row['bookAuthor'];
        $Edition = $row['Edition'];
        $Volume = $row['Volume'];
        $Pages = $row['Pages'];

        $SourceOfFund = $row['SourceOfFund'];
        $CostPrice = $row['CostPrice'];
        $pubisherID = $row['pubisherID'];
        $YearBook = $row['YearBook'];
        $bookCategory = $row['bookCategory'];
        $bookDescription = $row['bookDescription'];
        $book_status = $row['book_status'];
        $Remarks = $row['Remarks'];
		
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update this Book</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_book.php">
						<fieldset class="box-left">
							  

                              <div class="control-group">
									<label class="control-label" for="bookIsbn">ISBN</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="bookIsbn" id="bookIsbn" type="text" value="<?php echo $bookIsbn; ?>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="AccessionNumber">Accession Number</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="AccessionNumber" id="AccessionNumber" type="text" value="<?php echo $AccessionNumber; ?>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="DateRecieved">Date Recieved</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="DateRecieved" id="DateRecieved" type="date" value="<?php echo $DateRecieved; ?>">
									</div>
							  	</div>

							  	<div class="control-group">
								<label class="control-label" for="Class">Class</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Class" id="Class" type="text"  value="<?php echo $Class; ?>">
								</div>
							  </div>

							  	<div class="control-group">
								<label class="control-label" for="bookAuthor">Author</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookAuthor" id="bookAuthor" type="text" value="<?php echo $bookAuthor; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="bookTitle">Book Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookTitle" id="bookTitle" type="text" value="<?php echo $bookTitle; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="Edition">Edition</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Edition" id="Edition" type="text" value="<?php echo $Edition; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="Volume">Volumes</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Volume" id="Volume" type="text" value="<?php echo $Volume; ?>">
								</div>
							  </div>
							

							  <div class="control-group">
								<label class="control-label" for="Pages">Pages</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Pages" id="Pages" type="text" value="<?php echo $Pages; ?>">
								</div>
							  </div>

							</fieldset>
							<fieldset class="box-right">

							   <div class="control-group">
								<label class="control-label" for="SourceOfFund">Source Of Fund</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SourceOfFund" id="SourceOfFund" type="text" value="<?php echo $SourceOfFund; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="CostPrice">Cost Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="CostPrice" id="CostPrice" type="text" value="<?php echo $CostPrice; ?>">
								</div>
							  </div> 

							  <div class="control-group">
								<label class="control-label" for="pubisherID">Pubisher</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="pubisherID" id="pubisherID" type="text" value="<?php echo $pubisherID; ?>">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="YearBook">Year</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="YearBook" id="YearBook" type="text" value="<?php echo $YearBook; ?>">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookCategory">Category</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookCategory" id="bookCategory" type="text" value="<?php echo $bookCategory; ?>">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookDescription">Description</label>
								<div class="controls">
								  
								  <textarea id="bookDescription" name="bookDescription" rows="4" cols="50" value="<?php echo $bookDescription; ?>"></textarea>
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="Remarks">Remarks</label>
								<div class="controls">
								  
								  <textarea id="Remarks" name="Remarks" rows="4" cols="50" value="<?php echo $Remarks; ?>"></textarea>
								</div>
							  </div>
							</fieldset>

							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Update this Book</button>
                                <input type="hidden" name="hid" value="<?php echo $id; ?>">
							  </div>
							
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

	<?php
		get_footer();
	?>
