<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
$contactno = $_POST['contactno'];
$Message = $_POST['Message'];


$ch = curl_init();
$parameters = array(
    'apikey' => '7353175284a193edd275d7ab6c39bf08', //Your API KEY
    'number' => $contactno,
    'message' => $Message,
    'sendername' => 'SEMAPHORE'
);
curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
curl_setopt( $ch, CURLOPT_POST, 1 );

//Send the parameters set above with the request
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

// Receive response from server
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close ($ch);

//Show the server response
//echo $output;


?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Books</h2>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<!--Admin -->
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Message Status</th>
							  </tr>
						  </thead>
						  <tbody>
						  	<td><?php echo $Message?></td>
						  </tbody>
					  </table>
					</div>
					<!--End Admin -->

				</div>
				<a class="btn btn-success" href="view_all_books.php">Booklist</a>
				
				
				

			</div><!--/row-->
<?php
	get_footer();
?>

