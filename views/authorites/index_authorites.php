<table border=1>
    new authorites <a href="?controller=authorites&action=newauthorites">click</a><br>
    <form method="get"action="">
        <input type="text"name="key">
        <input type="hidden" name="controller"value="authorites"/>
        <button type="submit"name="action"value="search">Search</button>
    </form>
    <tr><td>authoritesID</td><td>officeName</td><td>fName</td><td>lName</td><td>position</td><td>update</td><td>delete</td></tr>
<?php foreach($authorites_list as $al){
    echo "<tr><td>$al->aID</td>
          <td>$al->officeName</td>
          <td>$al->fName</td>
          <td>$al->lName</td>
          <td>$al->position</td>
          <td><a href=?controller=authorites&action=updateFormauthorites&oID=$al->aID>update</td>
          <td><a href=?controller=authorites&action=deleteauthorites&oID=$al->aID>delete</td></tr>";
}
echo "</table>";
?>