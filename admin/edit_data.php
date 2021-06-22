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
        $course = $row['course'];
        $yns = $row['yns'];
        $contactNo = $row['contactNo'];
        $Address = $row['Address'];		
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
											<label class="control-label" for="midint">M.I.:</label>
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
								</div>
								</fieldset>
								<fieldset class = "box-right">
								<div><!--Right Box-->
										<div class="control-group">
											<label class="control-label" for="course">Course:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="course" id="course" type="text" value="<?php echo $course?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="yns">Year and Section:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="yns" id="yns" type="text" value="<?php echo $yns?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="contactNo">ContactNo:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="contactNo" id="contactNo" type="text" value="<?php echo $contactNo?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="Address">Address:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="Address" id="Address" type="text" value="<?php echo $Address?>">
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
