<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>

<ul class="borrower-icons" style="list-style-type:none;font-family:Cooper black;" >
            <li style="font-size:2em";>
                <a class="submenu" href="add_new_borrower.php">
                    <img src="images/add_user.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                    Add New Borrower
                    </span>
                </a>
            </li>

            <li style="font-size:2em";>
                <a class="submenu" href="view_borrower.php">
                    <img src="images/view_user.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                        View Borrowers
                    </span>
                </a>
            </li>

</ul>

    <?php
	get_footer();
?>		