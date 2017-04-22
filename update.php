<?php
include_once ('_config.php');

// retrieve post values
if(isset($_POST['values']))
{
    $values = $_POST['values'];

    // create book from values
    $book = new Book();
    $book->hydrate($values);
    $book->save();

}

// redirection to prevent from a refresh
header('Location: list.php');
