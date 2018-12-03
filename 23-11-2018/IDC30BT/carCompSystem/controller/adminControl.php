<?php
include 'model/adminModel.php';
class adminControl {
    public $allVehicle;
    public $allFeatures;
    function __construct()
    {
        
    }

    public static function addFeature()
    {
        session_start();
        $username = $_SESSION['username'];
        echo $_SESSION['username'];
        
      //$allVehicle = new Admin($reg,$cars);
      $allFeatures = Feature::getFeature();
      $allVehicle = Dealer_Vehicle::getVehicle($username);
      require_once 'view/administrator/addFeature.php';
      if (isset($_GET['featureType']) && isset($_GET['vehicleType']) && isset($_GET['btnSubmit']))
      {
          try {
          Feature::addFeature($_GET['featureType'], $_GET['vehicleType']); 
          }
            catch (Exception $e) {
          echo "<font color =red size=3>You Duplicated the feature for this vehicle</font>";
            }
      }
              
    }
    
    public static function addVehicle()
    {
        session_start();
        $username = $_SESSION['username'];
        
        $allVehicle = vehicle::getSpecificCar();
        $dealer = Dealer::getDealer($username);
       
        require_once 'view/administrator/addVehicle.php';
        if (isset($_POST['btnAdd'])) 
        {
            $caReg = $_POST['carReg'];
            $vehicleId = $_POST['vId'];
            $dealerId = $dealer;
            $price = $_POST['price'];
            $mileage = $_POST['mileage'];
            $image = $_POST['fileupload'];
            $colour = $_POST['colour'];
            $year = $_POST['year']; 
            
          
              move_uploaded_file($_FILES['fileupload']['tmp_name'], 'Images/'.basename($_FILES['fileupload']['name']));
              
             // echo '/Images/'.$_FILES[$image]['name'];
             
    
              
          
           $image = basename($image);
           $image = 'Images/'.basename($_FILES['fileupload']['name']);
           
                Dealer_Vehicle::addAcar($caReg, $vehicleId, $dealerId, $price, $mileage, $image, $colour, $year);
                
        }
        
    }
    public static function home()
    {
        require_once 'view/adminPages.php';
    }
    
    public static function view()
    {
        session_start();
        $username = $_SESSION['username'];
        
        $vehReg = $_GET['regno'];
        
        try {
             Dealer_Vehicle::deleteVehicle($vehReg);
        $dealerCars = search::getCars($username);
        } catch (Exception $ex) 
        {
          echo "<font color =red size=3>something went wrong</font>";  
        }
       
       
        
        
        
          require_once 'view/administrator/view.php';  
        
        
             
             
            
        
             
        
    }
    

}