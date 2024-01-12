<?php 
class deviceController
{
    public function index()
    {
           $device_list=device::getAll();
           require_once('views/device/index_device.php');
    }
}
?>