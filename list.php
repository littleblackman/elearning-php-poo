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

                <?php
                    $bdd   = new PDO('mysql:host=localhost;dbname=my_library;charset=utf8', 'root', 'root');
                    $query = "SELECT * FROM book";
                    $req = $bdd->prepare($query);
                    $req->execute();

                    while($row = $req->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>'.$row['title'].'</td>';
                        echo '<td>'.$row['author'].'</td>';
                        echo '<td>'.$row['description'].'</td>';
                        echo '<td>'.$row['note'].'</td>';
                        echo '</tr>';
                    };?>

            </table>
        </section>


        <section id="add_book">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label>Titre: </label>
                    <input name="title" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Auteur:</label>
                    <input name="author" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>description:</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="selectbox">
                    <label>Note sur 10:</label>
                    <select name="note" class="form-select">
                        <?php for($i = 1; $i <= 10; $i++ ) {
                            echo '<option value="1">'.$i.'</option>';
                            };?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </section>


        <footer>
            #Achetez des livres, c'est bon pour la santé
        </footer>

    </div>
</body>
</html>
