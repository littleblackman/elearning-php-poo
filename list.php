<?php

$all_books = array(
                    array('title' => 'King Kong Théorie', 'author' => 'Virgine Despentes', 'description' => 'Essais sur le fénminisme', 'note' => 10),
                    array('title' => 'Des lumières et des ombres', 'author' => 'Henri Alekan', 'description' => 'Essais sur la lumière', 'note' => 8),
                    array('title' => 'Une brève histoire du temps', 'author' => 'Stephen Hawking', 'description' => 'Essais sur le fénminisme', 'note' => 10),
                    array('title' => 'Shinning', 'author' => 'Stephen King', 'description' => 'Fantastique', 'note' => 7),
                    array('title' => 'Fondation', 'author' => 'Isaac Asimov', 'description' => 'SF', 'note' => 10),
                    array('title' => 'Aux sources d\'internet', 'author' => 'Alexandre Serres', 'description' => 'Essais sur internet', 'note' => 6),
                );

;?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    <div id="content" class="container">
        <h1>Bibliothèque</h1>

        <header>
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="liste.php">Tous</a>
                    </li>
                </ul>
                <span id="author">
                    <img src="hand.jpg"/>
                     by Sandy
                </span>
            </nav>
        </header>

        <section id="list_book">
            <table class="table">
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Description</th>
                    <th>Note</th>
                </tr>

                <?php foreach($all_books as $one_book) {;
                    echo '<tr>';
                    echo '<td>'.$one_book['title'].'</td>';
                    echo '<td>'.$one_book['author'].'</td>';
                    echo '<td>'.$one_book['description'].'</td>';
                    echo '<td>'.$one_book['note'].'</td>';
                    echo '</tr>';
                };?>

            </table>
        </section>


        <footer>
            #Achetez des livres, c'est bon pour la santé
        </footer>

    </div>
</body>
</html>
