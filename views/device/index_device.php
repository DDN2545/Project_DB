<table border=1>
</form>
    <tr><td>dID</td><td>deviceName</td><td>Date</td><td>status</td><td>amount</td><td>update</td><td>delete</td></tr>
<?php foreach($device_list as $dl){
    echo "<tr><td>$dl->dID</td>
          <td>$dl->deviceName</td>
          <td>$dl->Date</td>
          <td>$dl->status</td>
          <td>$dl->amount</td>
          <td><a href=?controller=device&action=deviceupdateForm&oID=$dl->dID>update</td>
          <td><a href=?controller=device&action=devicedeleteConfirm&oID=$dl->dID>delete</td></tr>";
}
echo "</table>";
?>