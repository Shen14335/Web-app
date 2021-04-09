<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>

<ul class="borrower-icons" style="list-style-type:none; font-family:Cooper black">
            <li style="font-size:2.2em";>
                <a class="submenu" href="add_new_book.php">
                    <img src="images/add_book.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                    Add New Book
                    </span>
                </a>
            </li>

            <li style="font-size:2.2em";>
                <a class="submenu" href="view_book.php">
                    <img src="images/view_book.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                        View Books
                    </span>
                </a>
            </li>

            <li style="font-size:2.2em";>
                <a class="submenu" href="view_all_books.php">
                    <img src="images/borrow_book.svg" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                        Borrow
                    </span>
                </a>
            </li>

            <li style="font-size:2.2em";>
                <a class="submenu" href="borrowed_book.php">
                    <img src="images/return_book.svg" alt="View Books" style="width:6em;height:6em;">
                    <span class="hidden-tablet">
                        Return
                    </span>
                </a>
            </li>

</ul>
    

    <?php
	get_footer();
?>		