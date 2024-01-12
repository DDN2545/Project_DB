<?php
    $controllers = array('pages'=>['home','error'],'Office'=>['index','newOffice','addOffice','search','updateForm','update','deleteConfirm','delete']
    ,'authorites'=>['index','newauthorites','addauthorites','search','updateFormauthorites','updateaddauthorites','deleteauthoritesForm'],'device'=>['index']);
    function call($controller, $action)
    {
        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
            case "pages": $control = new PagesController();
                            break;
            case "Office":    require_once("models/OfficeModel.php");                
                              $controller = new OfficeController();
                              break;
            case "authorites":  require_once("models/authoritesModel.php");
                                require_once("models/OfficeModel.php");                
                                $controller = new authoritesController();
                                break;
            case "device":      require_once("models/authoritesModel.php");
                                require_once("models/OfficeModel.php");
                                require_once("models/deviceModel.php");                 
                                $controller = new deviceController();
                                break;
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers))
    {
        if(in_array($action,$controllers[$controller]))
        {
            call($controller,$action);
        }else
        {
            call('pages','error');
        }
    }
    else
    {
        call('pages','error');
    }
?>