<?php
//session_start();
function call($controller, $action)
{
    require_once 'controller/'.$controller.'Control.php';
    
    switch ($controller)
    {
        case 'login':
            
                $controller = new loginController();
                require_once 'model/users.php';
                break;
        case 'homePage': 
            $controller = new Home();
            break;
        case 'admin':
            $controller = new adminControl();
            require_once 'model/adminModel.php';
            require_once 'model/searchModel.php';
            require_once 'model/vehicleModel.php';
            require_once 'model/dealerVehicleModel.php';
            require_once 'model/featureModel.php';
            require_once 'model/dealerModel.php';
            break;
        case 'customer':
            $controller = new custController();
            require_once 'model/custModel.php';
            require_once 'model/updateCust.php';
            require_once 'model/dealerVehicleModel.php';
            break;
        case 'superAdmin':
            $controller = new superAdminControl();
            require_once 'model/superAdminModel.php';
            require_once 'model/dealerVehicleModel.php';
            break;
        
        case 'register':
            $controller = new registerControl();
            require_once 'model/dealerModel.php';
            require_once 'model/adminModel.php';
                   
    }
    $controller-> {$action}();
    
}



$controllers = array('login' => array('login'), 'homePage'=>array('homePage', 'contact', 'about'), 'admin'=>array('addFeature', 'addVehicle', 'home', 'view'), 'customer'=>array('view', 'updateCustomer'), 'superAdmin'=>array('addMake', 'addModel', 'addSeries','systemAdminReport'), 'register'=>array('registerCustomer', 'registerAdmin'));
          if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    }
          }
?>