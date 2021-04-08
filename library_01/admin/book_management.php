<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>


    <ul style="list-style-type:none; display:inline-flex;font-size:2em;">
            <li style="font-size:2em; padding: 0em 0em 2em 5em;">
                <a class="submenu" href="add_new_book.php">
                    <img src="images/add_book.png" alt="View Books" style="width:6em;height:6em;">
                    <p align="center">
                    Add
                    </p>
                </a>
            </li>

            <li style="font-size:2em; padding: 0em 0 2em 6em;">
                <a class="submenu" href="view_book.php">
                    <img src="images/view_book.png" alt="View Books" style="width:6em;height:6em;">
                    <p align="center">
                    View
                    </p>
                </a>
            </li>
    </ul>
</br>
    <ul style="list-style-type:none; display:inline-flex; font-size:2em;">
            <li style="font-size:2em;padding: 0em 0 2em 5em;";>
                <a class="submenu" href="borrowed_book.php">
                <img src="images/borrow_book.svg" alt="View Books" style="width:6em;height:6em;">
                    <p align="center">
                    Borrowed Books
                    </p>
                </a>
            </li>

            <li style="font-size:2em;padding: 0em 0 2em 5em;";>
                <a class="submenu" href="view_returned.php">
                <img src="images/return_book.svg" alt="View Books" style="width:6em;height:6em;">
                    <p align="center">
                    Returned Books
                    </p>
                </a>
            </li>
        </ul>
    

    <?php
	get_footer();
?>		