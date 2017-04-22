<?php
include_once ('_config.php');

// add the class
include_once(ROOT.'entity/book.php');
include_once(ROOT.'entity/bookManager.php');

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
