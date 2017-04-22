<?php
include_once ('_config.php');

// retrieve post values
if(isset($_POST['values']))
{
    $values = $_POST['values'];

    // create book from values
    $book = new Book();
    $book->hydrate($values);

    // connect to bdd & create
    $manager = new BookManager();

    // add a persist new method in manager
    $manager->persist($book);

}

// redirection to prevent from a refresh
header('Location: list.php');
