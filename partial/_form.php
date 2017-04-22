<form action="<?PHP echo HOST;?>update.php" method="post">
    <input type="hidden" name="values[id]" value="<?php echo $book->getId();?>"/>
    <div class="form-group">
        <label>Titre: </label>
        <input name="values[title]" class="form-control"  value="<?php echo $book->getTitle();?>"/>
    </div>
    <div class="form-group">
        <label>Auteur:</label>
        <input name="values[author]" class="form-control" value="<?php echo $book->getAuthor();?>"/>
    </div>
    <div class="form-group">
        <label>description:</label>
        <textarea name="values[description]" class="form-control"><?php echo $book->getDescription();?></textarea>
    </div>
    <div class="selectbox">
        <label>Note sur 10:</label>
        <select name="values[note]" class="form-select">
            <?php for($i = 1; $i <= 10; $i++ ):?>
                <?php ($i == $book->getNote()) ? $selected='selected="selected"' : $selected = "";?>
                <option value="<?php echo $i;?>" <?php echo $selected;?>>
                    <?php echo $i;?>
                </option>
            <?php endfor;?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>