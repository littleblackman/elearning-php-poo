<form action="<?PHP echo HOST;?>update.php" method="post">
    <div class="form-group">
        <label>Titre: </label>
        <input name="values[title]" class="form-control" />
    </div>
    <div class="form-group">
        <label>Auteur:</label>
        <input name="values[author]" class="form-control"/>
    </div>
    <div class="form-group">
        <label>description:</label>
        <textarea name="values[description]" class="form-control"></textarea>
    </div>
    <div class="selectbox">
        <label>Note sur 10:</label>
        <select name="values[note]" class="form-select">
            <?php for($i = 1; $i <= 10; $i++ ) {
                echo '<option value="1">'.$i.'</option>';
            };?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>