<?php echo "<br> Are you sure to delete this office<br>
            <br>$authorites->aID $authorites->oID $authorites->officeName $authorites->fName $authorites->lName $authorites->position<br>"; ?>
<form action="" method="get">
    <input type="hidden" name="controller" value="authorites"/>
    <input type="hidden" name="oID" value="<?php echo "$authorites->aID";?>" >
    <button type="submit" name ="action" value="index">Back</button>
    <button type="submit" name ="action" value="delete">delete</button>
</form>