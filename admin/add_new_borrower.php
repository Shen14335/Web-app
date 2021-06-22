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
							<fieldset class="box-left">


								<div><!--Left Box-->
										<div class="control-group">
											<label class="control-label" for="txtlastname">Lastname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="txtlastname" id="txtlastname" type="text" placeholder="Lastname">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="txtfirstname">Firstname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="txtfirstname" id="txtfirstname" type="text" placeholder="Firstname">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="midint">Middle Name:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="midint" id="midint" type="text" placeholder="Middle Name">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="presentedid">ID Number:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" placeholder="ID Number">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="contactNo">ContactNo:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" placeholder="ContactNo">
											</div>
										</div>
								</div>
								</fieldset>
								<fieldset class = "box-right">
								<div><!--Right Box-->
									<div class="control-group">
									<label for="utype" class="control-label">Borrower Type</label>
											<div class="controls">
												<select id="utype" name = "utype">
													<option value="Student">Student</option>
													<option value="Staff">Staff</option>
												</select>
											</div>
									</div>
										<div class="control-group">
											<label class="control-label" for="contactNo">Semester:</label>
											<div class="controls">
												<select id="semester" name="semester">
													<option value="First Semester">First Semester</option>
													<option value="Second Semester">Second Semester</option>
													<option value="Staff">Staff</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="course">Course:</label>
											<div class="controls">
												<select id="course" name="course">
													<option value="Information Technology">Information Technology</option>
													<option value="Hospitality Management">Hospitality Management</option>
													<option value="Tourism Managemen">Tourism Management</option>
													<option value="Business Management">Business Management</option>
													<option value="Secondary Education">Secondary Education</option>
													<option value="Elementary Education">Elementary Education</option>
													<option value="Associate in Computer Technology">Associate in Computer Technology</option>
													<option value="TESDA: Bartending">TESDA: Bartending</option>
													<option value="TESDA:Bread and Pastry">TESDA:Bread and Pastry</option>
													<option value="TESDA:Computer Systems Servicing">TESDA:Computer Systems Servicing</option>
													<option value="TESDA:Food and Beverages">TESDA:Food and Beverages</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="yns">Year</label>
											<div class="controls">
											<select id="yns" name="yns">
														<option value="First Year">First Year</option>
														<option value="Second Year">Second Year</option>
														<option value="Third year">Third Year</option>
														<option value="Fourth Year">Fourth Year</option>
													</select>
											</div>
										</div>
										

										<div class="control-group">
											<label class="control-label" for="Address">Address:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="Address" id="Address" type="text" placeholder="Address">
											</div>
										</div>

										
							  	</div>
								  
								</fieldset>
								<label class="control-group" for="contactNo">Note: Avoid using comma in address, just use blank/white/spacebar as substitute:</label>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>

						
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php
	get_footer();
?>


