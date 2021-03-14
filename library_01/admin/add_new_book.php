<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Book</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_new_book.php">
							<fieldset>

								<div class="control-group">
									<label class="control-label" for="bookIsbn">ISBN</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="bookIsbn" id="bookIsbn" type="text" placeholder="ISBN">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="AccessionNumber">Accession Number</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="AccessionNumber" id="AccessionNumber" type="text" placeholder="AccessionNumber">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="DateRecieved">Date Recieved</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="DateRecieved" id="DateRecieved" type="date" >
									</div>
							  	</div>

							  	<div class="control-group">
								<label class="control-label" for="Class">Class</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Class" id="Class" type="text" placeholder="Class">
								</div>
							  </div>

							  	<div class="control-group">
								<label class="control-label" for="bookAuthor">Author</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookAuthor" id="bookAuthor" type="text" placeholder="Author">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="bookTitle">Book Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookTitle" id="bookTitle" type="text" placeholder="Book Title">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="Edition">Edition</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Edition" id="Edition" type="text" placeholder="Edition">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="Volume">Volumes</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Volume" id="Volume" type="text" placeholder="Volume">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="Pages">Pages</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Pages" id="Pages" type="text" placeholder="Pages">
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="SourceOfFund">Source Of Fund</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SourceOfFund" id="SourceOfFund" type="text" placeholder="SourceOfFund">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="CostPrice">Cost Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="CostPrice" id="CostPrice" type="text" placeholder="CostPrice">
								</div>
							  </div> 

							  <div class="control-group">
								<label class="control-label" for="pubisherID">Pubisher</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="pubisherID" id="pubisherID" type="text" placeholder="Pubisher">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="YearBook">Year</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="YearBook" id="YearBook" type="text" placeholder="Year">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookCategory">Category</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="bookCategory" id="bookCategory" type="text" placeholder="Book Category">
								</div>
							  </div>

                              <div class="control-group">
								<label class="control-label" for="bookDescription">Description</label>
								<div class="controls">
								  
								  <textarea id="bookDescription" name="bookDescription" rows="4" cols="50" placeholder="Book Description"></textarea>
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Book</button>
							  </div>
							</fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php
	get_footer();
?>
