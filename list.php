<?php
include_once ('_config.php');

// add the book class
include_once(ROOT.'entity/book.php');

// do the queries
$bdd   = new PDO('mysql:host=localhost;dbname=my_library;charset=utf8', 'root', 'root');
$query = "SELECT * FROM book";
$req = $bdd->prepare($query);
$req->execute();
while($row = $req->fetch(PDO::FETCH_ASSOC)) {

    // instance of a book object
    $book = new Book();

    // hydrate manualy from bdd datas
    $book->setId($row['id']);
    $book->setTitle($row['title']);
    $book->setAuthor($row['author']);
    $book->setDescription($row['description']);
    $book->setNote($row['note']);

    // now you have an array of object (instead of an array of array)
    $books[] = $book;
}


// include the doctype and the top of the page which is the same on all pages
include_once (PARTIAL.'_head.php');
include_once (PARTIAL.'_nav.php');

;?>

<section id="list_book">
    <table class="table">
        <tr>
            <th>Identification</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>Note</th>
        </tr>
        <?php foreach($books as $book):?>
            <tr>
                <td><?php echo $book->getPersonalIdentification();?></td>
                <td><?php echo $book->getTitle()?></td>
                <td><?php echo $book->getAuthor()?></td>
                <td><?php echo $book->getDescription()?></td>
                <td><?php echo $book->getNote()?></td>
            </tr>
        <?php endforeach;?>
    </table>
</section>

<section id="add_book">
    <?php include_once (PARTIAL.'_form.php');?>
</section>

<?php include_once (PARTIAL.'_footer.php');?>
