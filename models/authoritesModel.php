<?php class authorites{
    public $aID;
    public $oID;
    public $officeName;
    public $fName;
    public $lName;
    public $position;

    public function __construct($aID,$oID,$officeName,$fName,$lName,$position)
{
    $this->aID = $aID;
    $this->oID = $oID;
    $this->officeName = $officeName;
    $this->fName = $fName;
    $this->lName = $lName;
    $this->position = $position;
}

public function getAll() //รับค่าทั้งหมด
{
    $authoritesList = [];
    require("connection_connect.php");
    $sql="SELECT * FROM authorites inner join office on authorites.oID = office.oID";
    $result=$conn->query($sql);
    while($my_row = $result->fetch_assoc())
    {
        $aID = $my_row['aID'];
        $oID = $my_row['oID'];
        $officeName = $my_row['officeName'];
        $fName = $my_row['fName'];
        $lName = $my_row['lName'];
        $position = $my_row['position'];
        $authoritesList[]=new authorites($aID,$oID,$officeName,$fName,$lName,$position);
    }
    require("connection_close.php");
    return $authoritesList;
}

public static function Add($officeName,$fName,$lName,$position) //เพิ่ม
{

    require("connection_connect.php");
    $sql="INSERT INTO authorites(aID,oID,fName,lName,position) VALUES (NULL,'$oID','$fName','$lName','$position')";
    echo"$sql";
    $result= $conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}
public static function get($aid) //รับค่าที่ละตัว
{
    require("connection_connect.php");
    $sql="SELECT * FROM authorites where aID = '$aid'";
    $result=$conn->query($sql);
    $my_row=$result->fetch_assoc();
    $aid=$my_row['aID'];
    $oid=$my_row['oID'];
    $oname=$my_row['officeName'];  
    $fname=$my_row['fName'];    
    $lname=$my_row['lName'];
    $po=$my_row['position'];
    require("connection_close.php");
    return new authorites($aid,$oid,$oname,$fname,$lname,$po);
}
public static function search($key) //search
{
    require("connection_connect.php");
    $sql = "SELECT * FROM authorites inner join office on authorites.oID = office.oID WHERE(oID like'%$key%' or officeName like'%$key%')";
    $result=$conn->query($sql);
    while($my_row=$result->fetch_assoc())
    {
        $aID = $my_row['aID'];
        $oID = $my_row['oID'];
        $officeName = $my_row['officeName'];
        $fName = $my_row['fName'];
        $lName = $my_row['lName'];
        $position = $my_row['position'];
        $authoritesList[]=new authorites($aID,$oID,$officeName,$fName,$lName,$position);
    }
    require("connection_close.php");
    return $authoritesList;
}
public static function delete($aid) //ลบ
{
    require_once("connection_connect.php");
    $sql = "DELETE FROM authorites WHERE aID='$aid'";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}
}
?>