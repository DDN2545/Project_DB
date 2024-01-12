<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller =$_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller='pages';
    $action='home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller = ".$controller.", action = ".$action;?>
        <br>[<a href= "?controller=pages&action=home">Home</a>]
        [<a href="?controller=Office&action=index">Office</a>]
        [<a href="?controller=authorites&action=index">authorites</a>]
        [<a href="?controller=device&action=index">device</a>]<br> 
        <?php require_once("routes.php");?>
    </body>
</html>