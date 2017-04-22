<?php
include_once ('_config.php');

// get the manager and the books
$manager = new BookManager();
$books   = $manager->getBooks();

// include the doctype and the top of the page which is the same on all pages
include_once (PARTIAL.'_head.php');
include_once (PARTIAL.'_nav.php');

;?>

<section id="list_book">
    <table class="table">
        <tr>
            <th/>
            <th>Identification</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>Note</th>
            <th/>
        </tr>
        <?php foreach($books as $book):?>
            <tr>
                <td><a href="edit.php?book_id=<?php echo $book->getId();?>">Edit</a></td>
                <td><?php echo $book->getPersonalIdentification();?></td>
                <td><?php echo $book->getTitle()?></td>
                <td><?php echo $book->getAuthor()?></td>
                <td><?php echo $book->getDescription()?></td>
                <td><?php echo $book->getNote()?></td>
                <td><a href="delete.php?book_id=<?php echo $book->getId();?>">Del</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</section>

<?php include_once (PARTIAL.'_footer.php');?>
