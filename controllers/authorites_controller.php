<?php 
class authoritesController
{
    public function index()
    {
           $authorites_list=authorites::getAll();
           require_once('views/authorites/index_authorites.php');
    }
    public function newauthorites()
    {
        $office_list=Office::getAll();
        require_once('views/authorites/newauthorites.php');
    }
    public function addauthorites()
    {
        $oID = $_GET['oID'];
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $position = $_GET['position'];
        authorites::Add($oID,$fName,$lName,$position); //add
        authoritesController::index(); //call authorites->index_Office
    }
    public function search()
    {
        $key=$_GET['key'];
        $authorites_list=authorites::search($key);
        require_once('views/authorites/index_authorites.php');
    }
    public function updateForm()
    {
        $aid = $_GET['aID'];
        $authorites=authorites::get($aid);
        $authorites_list=authorites::getAll();
        require_once('views/authorites/updateForm.php');
    }
    public function update()
    {
        $aid = $_GET['aID'];
        $oid = $_GET['oID'];
        $oname = $_GET['officeName'];
        $fname = $_GET['fName'];
        $lname = $_GET['lName'];
        $po = $_GET['position'];
        authorites::update($aid,$oid,$oname,$fname,$lname,$po); //update
        authoritesController::index(); //call v->index_authorites
    }
    public function deleteConfirm()
    {
        $aid = $_GET['aID'];
        $authorites = authorites::get($aid);
        require_once('views/authorites/deleteConfirm.php');
    }
    public function delete()
    {
        $aid = $_GET['aID'];
        authorites::delete($aid); //delete
        authoritesController::index(); //call authorites->index_Office
    }
}
?>