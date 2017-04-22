<?php
include_once ('_config.php');

// retrieve post values
if(isset($_POST['values']))
{
    $values = $_POST['values'];

    // add the class
    include_once(ROOT.'entity/book.php');
    include_once(ROOT.'entity/bookManager.php');

    // create book from values
    $book = new Book();
    $book->hydrate($values);

    // connect to bdd & create
    $manager = new BookManager();
    $manager->create($book);
}

exit;

// redirection to prevent from a refresh
header('Location: list.php');
