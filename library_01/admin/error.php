<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_borrower();
?>
			<h1 style = "color:red;">Book maybe borrowed already! or Borrower info not Correct or missing.</h1>
            <a class="btn btn-success" href="view_all_books.php">Booklist</a>
<?php
	get_footer();
?>
