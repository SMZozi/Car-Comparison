<?php

class superAdminControl {

    function __construct() {
        
    }

    public static function addMake()
    {
        require_once 'view/superAdmin/addMake.php';
        
        try
        {
            if(isset($_GET['btnAdd']))
            {
                $make = $_GET['make'];
                superAdminModel::newMake($make);
            }
        }
        catch (Exception $x)
        {
            echo "<font color =red size=3>You Duplicated the make of vehicle</font>";
        }
    }
    
    public static function addModel()
    {
        $getMake = superAdminModel::getMake();
        require_once 'view/superAdmin/addModel.php';
        
        if(isset($_GET['btnAddModel']) && isset($_GET['model']))
        {
            $makeId = $_GET['make'];
            $model = $_GET['model'];
            
            try 
            {
                superAdminModel::newModel($makeId, $model);
            } 
            catch (Exception $ex) 
            {
               echo "<font color =red size=3>You Duplicated the make of vehicle</font>"; 
            }
            
        }
    }
    
    public static function addSeries() 
    {
        $getModel = superAdminModel::getModel();
        require_once 'view/superAdmin/addSeries.php';  
        
        if(isset($_GET['btnAddSeries']))
        {
            $seriesName = $_GET['series'];
            $modelId = $_GET['model'];
            
            try 
            {
             superAdminModel::newSeries($seriesName, $modelId);  
            } catch (Exception $ex) 
            {
                echo "<font color =red size=3>something went wrong on your pages</font>";
            }
            
        }
    }
    
    public static function systemAdminReport()
    {
        
        $getMake = superAdminModel::getMake();
        
        if(isset($_GET['make']))
        {
          $make = $_GET['make'];
        }
       
        try 
        {
            
          $report = Dealer_Vehicle::dealerReport($make);
          $totalMake = Dealer_Vehicle::getTotalMake($make);
        } catch (Exception $ex) 
        {
            echo "<font color =red size=3>something went wrong on your pages</font>";
        }
            require_once 'view/superAdmin/viewDealersReport.php';
            
            
                    
            
      
        
    }
}

