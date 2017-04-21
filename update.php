<?php

// connect to bdd
$bdd   = new PDO('mysql:host=localhost;dbname=my_library;charset=utf8', 'root', 'root');

// insert in bdd
$req = $bdd->prepare("INSERT INTO book (title, description, author, note) VALUES (:title, :description, :author, :note)");
$req->execute(
    array(
        'title'       => $_POST['title'],
        'description' => $_POST['description'],
        'author'      => $_POST['author'],
        'note'        => $_POST['note'],
    )
);

// redirection to prevent from a refresh
header('Location: list.php');
