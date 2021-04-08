<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
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
						<form class="form-horizontal" method="post" action="save_new_user.php">
							<fieldset>

							<div class="control-group">
                              <label for="user_types">User Type</label>
									<select id="user_types" name = "user_types">
									  <option value="Librarian">Librarian</option>
									  <option value="Super_Admin">Super Admin</option>
									</select>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username">
								</div>

							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="txtpassword" type="text" placeholder="Password">
									<button type="button" onclick="genRandom()" name="genRand" class="btn btn-primary">Gen Password</button>
										<script>
												var down = document.getElementById('txtpassword');
												function genRandom() {
														down.value =
															Math.random().toString(36).slice(2);
												}
										</script>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Firstname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname">
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


<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->
