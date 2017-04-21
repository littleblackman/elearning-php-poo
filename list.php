<?php
include_once ('_config.php');

// do the queries
$bdd   = new PDO('mysql:host=localhost;dbname=my_library;charset=utf8', 'root', 'root');
$query = "SELECT * FROM book";
$req = $bdd->prepare($query);
$req->execute();
while($row = $req->fetch(PDO::FETCH_ASSOC)) {
    // create one book (an array) with each line from the bdd
    // notice that there is no "s" on $book
    $book  = array(
                        'title'         => $row['title'],
                        'author'        => $row['author'],
                        'description'   => $row['description'],
                        'note'          => $row['note']
                    );

    // add this book in an global array : it's an array of array
    // don't forget the "s" on $bookSSSS
    $books[] = $book;
}


// include the doctype and the top of the page which is the same on all pages
include_once (PARTIAL.'_head.php');
include_once (PARTIAL.'_nav.php');

;?>

<section id="list_book">
    <table class="table">
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>Note</th>
        </tr>
        <?php foreach($books as $book):?>
            <tr>
                <td><?php echo $book['title'];?></td>
                <td><?php echo $book['author'];?></td>
                <td><?php echo $book['description'];?></td>
                <td><?php echo $book['note'];?></td>
            </tr>
        <?php endforeach;?>
    </table>
</section>

<section id="add_book">
    <?php include_once (PARTIAL.'_form.php');?>
</section>

<?php include_once (PARTIAL.'_footer.php');?>
