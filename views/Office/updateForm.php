<form method="get"action="">
    <label>ชื่อกรม<input type="text" name="officeName" 
        value="<?php echo $office->officeName;?>"/></label><br>
    <label>ที่ตั้ง<input type="text" name="location"
        value="<?php echo $office->location;?>"/></label><br>
    <input type="hidden" name="controller" value="Office"/>
    <input type="hidden" name="oID" value="<?php echo "$office->oID";?>" >
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>