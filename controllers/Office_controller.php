<?php
class OfficeController
{
    public function index()
    {
        $office_list=Office::getAll();
        require_once('views/Office/index_Office.php');
    }
    public function newOffice()
    {
        require_once('views/Office/newOffice.php');
    }
    public function addOffice()
    {
        $officeName = $_GET['officeName'];
        $location = $_GET['location'];
        Office::Add($officeName,$location); //add
        OfficeController::index(); //call office->index_Office
    }
    public function search()
    {
        $key=$_GET['key'];
        $office_list=Office::search($key);
        require_once('views/Office/index_Office.php');
    }
    public function updateForm()
    {
        $id = $_GET['oID'];
        $office=Office::get($id);
        $office_list=Office::getAll();
        require_once('views/Office/updateForm.php');
    }
    public function update()
    {
        $id = $_GET['oID'];
        $oname = $_GET['officeName'];
        $loc = $_GET['location'];
        Office::update($id,$oname,$loc); //update
        OfficeController::index(); //call office->index_Office
    }
    public function deleteConfirm()
    {
        $id = $_GET['oID'];
        $office = Office::get($id);
        require_once('views/Office/deleteConfirm.php');
    }
    public function delete()
    {
        $id = $_GET['oID'];
        Office::delete($id); //delete
        OfficeController::index(); //call office->index_Office
    }
}
?>