<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>

<ul class="borrower-icons" style="display:inline;list-style-type:none; font-family:Cooper black">
            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="add_new_book.php">
                <div class="item">
                    <img src="images/add_book.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="caption">
                    Add New Book
                    </span>
                    </div>
                </a>
            </li>

            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="view_book.php" alt="View Books">
                <div class="item">
                    <img src="images/view_book.png" alt="View Books" style="width:6em;height:6em;">
                    <span class="caption">
                        View Books
                    </span>
                    </div>
                </a>
            </li>

            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="view_all_books.php">
                <div class="item">
                    <img src="images/borrow_book.svg" alt="View Books" style="width:6em;height:6em;">
                    <span class="caption">
                        Borrow
                    </span>
                    </div>
                </a>
            </li>

            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="borrowed_book.php">
                    <div class="item">
                        <img src="images/return_book.svg" alt="View Books" style="width:6em;height:6em;">
                        <span class="caption">
                            Return
                        </span>
                    </div>
                </a>
            </li>
</ul>
<ul class="borrower-icons" style="display:inline;list-style-type:none; font-family:Cooper black" position="relative">
            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="add_category.php">
                    <div class="item">
                        <img src="images/category.png" alt="Add Category" style="width:6em;height:6em;">
                        <span class="caption">
                            Add Book Category
                        </span>
                    </div>
                </a>
            </li>

            <li style="display:inline;font-size:2.2em";>
                <a class="submenu" href="view_categories.php">
                <div class="item">
                    <img src="images/view_category.jpg" alt="View Category" style="width:6em;height:6em;">
                    <span class="caption">
                        view Categories
                    </span>
                </div>
                </a>
            </li>
</ul>
    

    <?php
	get_footer();
?>		