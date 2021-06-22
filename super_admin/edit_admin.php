<?php
$id = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM super_admin where id = '$id'";
	$result = mysqli_query($connect,$sql);

	while ($row=mysqli_fetch_array($result))
	{
		$id = $row['id'];
        $lname = $row['lname'];
        $fname = $row['fname'];
        $username = $row['un'];
        $password = $row['ps'];	
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
						<form class="form-horizontal" method="post" action="update_admin.php">
							<fieldset class="box-left">

								<div><!--Left Box-->
										<div class="control-group">
											<label class="control-label" for="lname">Lastname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="lname" id="lname" type="text" value="<?php echo $lname ?>">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="fname">Firstname:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="fname" id="fname" type="text" value="<?php echo $fname ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="un">Username:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="un" id="un" type="text" value="<?php echo $username?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="ps">Password:</label>
											<div class="controls">
											<input class="input-xlarge focused" name="ps" id="ps" type="text" value="<?php echo $password?>">
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
