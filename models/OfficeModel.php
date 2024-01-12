<?php class Office{
    public $oID;
    public $officeName;
    public $location;

    public function __construct($oID,$officeName,$location)
{
    $this->oID = $oID;
    $this->officeName = $officeName;
    $this->location = $location;
}

public function getAll() //รับค่าทั้งหมด
{
    $officeList = [];
    require("connection_connect.php");
    $sql="SELECT * FROM office";
    $result=$conn->query($sql);
    while($my_row = $result->fetch_assoc())
    {
        $oID = $my_row['oID'];
        $officeName = $my_row['officeName'];
        $location = $my_row['location'];
        $officeList[]=new Office($oID,$officeName,$location);
    }
    require("connection_close.php");
    return $officeList;
}

public static function Add($officeName,$location) //เพิ่ม
{

    require("connection_connect.php");
    $sql="INSERT INTO office(oID,officeName,location) VALUES (NULL,'$officeName','$location')";
    $result= $conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}

public static function get($id) //รับค่าที่ละตัว
{
    require("connection_connect.php");
    $sql="SELECT * FROM office where oID = '$id'";
    $result=$conn->query($sql);
    $my_row=$result->fetch_assoc();
    $id=$my_row['oID'];
    $oname=$my_row['officeName'];
    $loc=$my_row['location'];
    require("connection_close.php");
    return new office($id,$oname,$loc);
}
public static function search($key) //search
{
    require("connection_connect.php");
    $sql = "SELECT * FROM `office` WHERE(oID like'%$key%' or officeName like'%$key%')";
    $result=$conn->query($sql);
    while($my_row=$result->fetch_assoc())
    {
        $id=$my_row['oID'];
        $oname=$my_row['officeName'];
        $loc=$my_row['location'];
        $officeList[]=new Office($id,$oname,$loc);
    }
    require("connection_close.php");
    return $officeList;
}
public static function update($id,$oname,$loc) //update
{
    require("connection_connect.php");
    //UPDATE office SET officeName='Nam',location='Tan'where oID='6'
    echo "update function";
    $sql="UPDATE office SET officeName='$oname',location='$loc'where oID='$id'";
    echo"$sql";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}
public static function delete($id) //ลบ
{
    require_once("connection_connect.php");
    //$sql = "DELETE FROM office WHERE oID= '$id'";
    $sql = "DELETE FROM office WHERE oID='$id'";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}

}
?>