<?php
include_once ('_config.php');

if($book_id = $_GET['book_id'])
{
    $manager = new BookManager();
    $manager->deleteById('book', $book_id);
}

// redirection to prevent from a refresh
header('Location: list.php');