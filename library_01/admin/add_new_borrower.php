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

							  <div class="control-group">
                              <label for="user_types">Borrower Type</label>
									<select id="user_types" name = "user_types">
									  <option value="Student">Student</option>
									</select>
							  </div>
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
											<label class="control-label" for="midint">M.I.:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="midint" id="midint" type="text" placeholder="Middle Inintial">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="presentedid">ID Number:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" placeholder="ID Number">
											</div>
										</div>
								</div>
								</fieldset>
								<fieldset class = "box-right">
								<div><!--Right Box-->
										<div class="control-group">
											<label class="control-label" for="course">Course:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="course" id="course" type="text" placeholder="Course">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="yns">Year and Section:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="yns" id="yns" type="text" placeholder="Year and Section">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="contactNo">ContactNo:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" placeholder="ContactNo">
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
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>

						
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
						<fieldset class="box-left">		
							  <div class="control-group">
                              <label for="user_types">Borrower Type</label>
									<select id="user_types" name = "user_types">
									  <option value="Staff">Staff</option>
									</select>
							  </div>
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
											<label class="control-label" for="midint">M.I.:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="midint" id="midint" type="text" placeholder="Middle Inintial">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="presentedid">ID Number:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" placeholder="ID Number">
											</div>
										</div>
								</div>
								</fieldset>
								<fieldset class = "box-right">
									<div><!--Right Box-->
										<div class="control-group">
											<label class="control-label" for="contactNo">ContactNo:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" placeholder="ContactNo">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="Address">Address:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="Address" id="Address" type="text" placeholder="Address">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="course">Course:</label>
											<div class="controls">
											<input class="input-xlarge focused"  type="text" placeholder="NA" disabled>
											<input class="hidden" name="course" id="course" type="text" value="NA" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="yns">Year and Section:</label>
											<div class="controls">
											<input class="input-xlarge focused" type="text" placeholder="NA" disabled>
											<input class="hidden" name="yns" id="yns" type="text" placeholder="NA" value ="NA">
											</div>
										</div>
										
								</fieldset>
										<div class="form-actions">
											<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
										</div>
									</div>
							
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php
	get_footer();
?>


