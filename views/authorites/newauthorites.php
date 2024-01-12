<form method="get"action="">
    <label>สังกัด<select name="oID">
        <?php foreach($office_list as $ol)
        {
            echo"<option value= $ol->oID>$ol->officeName</option>";
        }?>
    </select></label><br>
    <label>ชื่อ<input type="text" name="fName"/></label><br>
    <label>นามสกุล<input type="text" name="lName"/></label><br>
    <label>ตำแหน่ง<input type="text" name="position"/></label><br>
    <input type="hidden" name="controller" value="authorites"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addauthorites">Save</button>
</form>