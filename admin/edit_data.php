<?php
$id = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM borrowers where id = '$id'";
	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $lname = $row['lname'];
        $fname = $row['fname'];
        $midint = $row['midint'];
        $preid = $row['preid'];
		$semester = $row['semester'];
        $course = $row['course'];
        $yns = $row['yns'];
        $contactNo = $row['contactNo'];
        $Address = $row['Address'];		
		$usertype = $row['usertype'];
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Record</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_borrower.php">
							<fieldset class="box-left">

								<div><!--Left Box-->
										<div class="control-group">
											<label class="control-label" for="txtlastname">Lastname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="txtlastname" id="txtlastname" type="text" value="<?php echo $lname ?>">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="txtfirstname">Firstname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="txtfirstname" id="txtfirstname" type="text" value="<?php echo $fname ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="midint">Middle Initial:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="midint" id="midint" type="text" value="<?php echo $midint?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="presentedid">ID Number:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="presentedid" id="presentedid" type="text" value="<?php echo $preid?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="contactNo">ContactNo:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" value="<?php echo $contactNo?>">
											</div>
										</div>
								</div>
								</fieldset>
								<fieldset class = "box-right">
								<div><!--Right Box-->
										<div class="control-group">
												<label class="control-label" for="semester">Semester:</label>
												<div class="controls">
													<select id="semester" name="semester">
														<option value="First Semester">First Semester</option>
														<option value="Second Semester">Second Semester</option>
														<option value="Staff">Staff</option>
													</select>
												</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="semester">Course:</label>
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
											<input class="input-xlarge focused" name="Address" id="Address" type="text" value="<?php echo $Address?>">
											</div>
										</div>
										<div class="control-group">
											<label for="utype" class="control-label">Borrower Type</label>
												<div class="controls">
													<select id="utype" name = "utype">
														<option value="Student">Student</option>
														<option value="Staff">Staff</option>
													</select>
												</div>
										</div>
							  	</div>
								</fieldset>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Update Record</button>
                                <input type="hidden" name="hid" value="<?php echo $id; ?>">
							  </div>

						
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php
	get_footer();
?>
