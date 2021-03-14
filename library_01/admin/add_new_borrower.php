<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Record</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_new_borrower.php">
							<fieldset>
							  <div class="control-group">
                              <label for="user_types">Borrower Type</label>
									<select id="user_types" name = "user_types">
									  <option value="Student">Student</option>
									</select>

							  </div>

							  
							  <div class="control-group">
								<label class="control-label" for="txtfirstname">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="txtfirstname" type="text" placeholder="Firstname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="txtlastname">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="txtlastname" type="text" placeholder="Lastname">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="presentedid">Presented IDNo:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" placeholder="Presented IDNo">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="contactNo">ContactNo:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" placeholder="ContactNo">
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>
							</fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Record</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_new_borrower.php">
							<fieldset>
							  <div class="control-group">
                              <label for="user_types">Borrower Type</label>
									<select id="user_types" name = "user_types">
									  <option value="Staff">Staff</option>
									</select>

							  </div>

							  
							  <div class="control-group">
								<label class="control-label" for="txtfirstname">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="txtfirstname" type="text" placeholder="Firstname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="txtlastname">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="txtlastname" type="text" placeholder="Lastname">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="presentedid">Presented IDNo:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" placeholder="Presented IDNo">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="contactNo">ContactNo:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" placeholder="ContactNo">
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>
							</fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php
	get_footer();
?>


