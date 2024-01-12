<table border=1>
    new Office <a href="?controller=Office&action=newOffice">click</a><br>
    <form method="get"action="">
        <input type="text"name="key">
        <input type="hidden" name="controller"value="Office"/>
        <button type="submit"name="action"value="search">Search</button>
    </form>
    <tr><td>officeID</td><td>officeName</td><td>location</td><td>update</td><td>delete</td></tr>
<?php foreach($office_list as $ol){
    echo "<tr><td>$ol->oID</td>
          <td>$ol->officeName</td>
          <td>$ol->location</td>
          <td><a href=?controller=Office&action=updateForm&oID=$ol->oID>update</td>
          <td><a href=?controller=Office&action=deleteConfirm&oID=$ol->oID>delete</td></tr>";
}
echo "</table>";
?>