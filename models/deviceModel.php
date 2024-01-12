<?php class device{
    public $dID;
    public $oID;
    public $deviceName;
    public $status;
    public $amount;

    public function __construct($dID,$oID,$officeName,$status,$amount)
{
    $this->dID = $dID;
    $this->oID = $oID;
    $this->deviceName = $deviceName;
    $this->status = $status;
    $this->amount = $amount;
}

public function getAll() //รับค่าทั้งหมด
{
    $deviceList = [];
    require("connection_connect.php");
    $sql="SELECT * FROM device inner join logDevice on device.oID = logDevice.oID";
    $result=$conn->query($sql);
    while($my_row = $result->fetch_assoc())
    {
        $dID = $my_row['dID'];
        $oID = $my_row['oID'];
        $deviceName = $my_row['deviceName'];
        $status = $my_row['status'];
        $amount = $my_row['amount'];
        $position = $my_row['position'];
        $deviceList[]=new device($dID,$oID,$deviceName,$status,$amount);
    }
    require("connection_close.php");
    return $deviceList;
}
}
?>