<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Reports</h2>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<!--Admin -->
					<div class="box-content"  id="printablediv">

						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Books</th>
								  <th>Borrower</th>

							  </tr>
						  </thead>
						  <tbody>
							<tr>
								<td>
									<a class="btn btn-success" href="view_book.php" style="margin-bottom:1em">Book List</a>
								</td>
								<td>
									<a class="btn btn-success" href="view_borrower.php" style="margin-bottom:1em"> Borrower List</a>
								</td>
							</tr>

							<tr>
								<td>
									<a class="btn btn-success" href="view_all_books.php" style="margin-bottom:1em">Full Detail Book List</a>
								</td>
								<td>
									<a class="btn btn-success" href="view_all_borrowers.php" style="margin-bottom:1em">Full Detail Borrower List</a>
								</td>
							</tr>
							<tr>
								<td>
									<a class="btn btn-success" href="borrowed_book.php" style="margin-bottom:1em">Borrowed Books</a>
								</td>
								<td>
									
								</td>
							</tr>
							<tr>
								<td>
									<a class="btn btn-success" href="view_returned.php" style="margin-bottom:1em">Returned Book List</a>
								</td>
								<td>
									
								</td>
							</tr>

							<tr>
								<td>
									<a class="btn btn-success" href="category_print.php" style="margin-bottom:1em">Category Book List</a>
								</td>
								<td>
									
								</td>
							</tr>

						  </tbody>
					  </table>
					</div>
					<!--End Admin -->

				</div>
				
				<button class="btn btn-primary" onclick="printDiv('printablediv')">Print</button>

				<iframe name="print_frame" width="0" height="0" frameborder="1" src="about:blank"></iframe>
				
				
				

			</div><!--/row-->

			<script>
		
				function printDiv(divID) {
					//Get the HTML of div
					var divElements = document.getElementById(divID).innerHTML;
					//Get the HTML of whole page
					var oldPage = document.body.innerHTML;
					//Reset the page's HTML with div's HTML only
					document.body.innerHTML = "<html><head><title></title></head><body>" + 	divElements + "</body>";
					//Print Page
					window.print();
					//Restore orignal HTML
					document.body.innerHTML = oldPage;

			}
			</script>
<?php
	get_footer();
?>