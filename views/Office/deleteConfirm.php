<?php echo "<br> Are you sure to delete this office<br>
            <br>$office->oID $office->officeName $office->location<br>"; ?>
<form action="" method="get">
    <input type="hidden" name="controller" value="Office"/>
    <input type="hidden" name="oID" value="<?php echo "$office->oID";?>" >
    <button type="submit" name ="action" value="index">Back</button>
    <button type="submit" name ="action" value="delete">delete</button>
</form>