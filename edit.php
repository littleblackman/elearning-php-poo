<?php
include_once ('_config.php');

// retrieve the object by id

if(isset($_GET['book_id']))
{
    $book_id = $_GET['book_id'];
    $manager = new BookManager();
    $book = $manager->getBookById($book_id);
} else {
    $book = new Book();
}

// include the doctype and the top of the page which is the same on all pages
include_once (PARTIAL.'_head.php');
include_once (PARTIAL.'_nav.php');

;?>

<section id="add_book">
    <?php include_once (PARTIAL.'_form.php');?>
</section>

<?php include_once (PARTIAL.'_footer.php');?>