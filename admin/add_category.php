<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
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
						<form class="form-horizontal" method="post" action="save_new_category.php">
							<fieldset class="box-left">

								<div class="control-group">
									<label class="control-label" for="bookIsbn">Book Category</label>
									<div class="controls">
									  <input class="input-xlarge focused" name="bookCategory" id="bookCategory" type="text" placeholder="Book Category">
									</div>
							  	</div>
                            </fieldset>
                            <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New bookCategory</button>
							  </div>
                        </form>
                    </div>
				</div><!--/span-->

			</div><!--/row-->

   
<?php
	get_footer();
?>