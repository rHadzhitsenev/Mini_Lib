<?php
?>

<form method="post" action="../Mini_Library/addBook.php">
    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Author</label>
        <input type="text" name="author">
    </div>
    <div>
        <label>Genres</label>
        <select name="genre">
            <option>--select--</option>
        <?php
        /** @var \Data\addBook\addBookViewData $data*/
        foreach ($data->getGenres() as $genre ){
            $value = "value='" . $genre['id'] ."'";
            echo"<option " . $value ." >" . $genre['name'] . "</option>";


        }

        ?>

        </select>
    </div>
    <div>
        <label>Year</label>
        <input type="text" name="year">
    </div>
    <div>
        <label>Comment</label>
        <input type="text" name="comment">
    </div>
    <div>
        <label>Language</label>
        <select name="language">
            <option>--select--</option>
            <?php

            foreach ($data->getLanguages() as $language){
                $value = "value='" . $language['id'] ."'";
                echo "<option " . $value.">" . $language['name'] . "</option>";

            }
            ?>

        </select>
    </div>
    <div>

        <input type="submit" value="addBook" name="add">


    </div>

</form>
