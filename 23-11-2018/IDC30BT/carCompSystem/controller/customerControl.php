<?php
 class custController 
{

        public $cars;
        public $customer;
        function __construct() 
        {
        
        }
        public function  view()
        {
            
         if(isset($_GET['minRange']) || isset($_GET['maxRange']))
         {
             $min = $_GET['minRange'];
                     $max = $_GET['maxRange'];
         }
         else
         {
             $min = 0;
             $max = 25000;
         }
         
         if($min < $max)
         {
                //$minAnt = $_GET['minRange'];
                //$maxAmt = $_GET['maxRange'];
            $cars = Dealer_Vehicle::searchPriceRanges($min, $max);
            require_once 'view/customer/viewCars.php';
         }
         
        else 
        {
     require_once 'view/customer/viewCars.php';
     echo '<font color=red size=4>Please ensure that the minimum amount is less than maximum amount</font>';
        }
            
            /*if(!isset($_GET['btnCompare']))
            {
            $cars = Dealer_Vehicle::getCars();
            require_once 'view/customer/viewCars.php';
            
            }
            
            elseif(isset($_GET['btnCompare']))
            {
               
            
            }*/
        }
        
        public static function updateCustomer()
        {
            session_start();
            $username = $_SESSION['username'];
            $customer = Customer::getCustomer($username);
            
            
            if(isset($_GET['btnInsert']))
            {
                $email = $_GET['email'];
                $fName = $_GET['firstname'];
                $lName = $_GET['lastname'];
                $idNo = $_GET['idNo'];
                $poBox = $_GET['postBox'];
                $cCity = $_GET['city'];
                $pCod = $_GET['code'];
                $province = $_GET['province'];
                $cell = $_GET['cellNo'];
                $tell = $_GET['tellNo'];
                $uName = 'CUST6';
                
                try 
                {
                    Customer::updateCust($email, $fName, $lName, $idNo, $poBox, $cCity, $pCod, $province, $cell, $tell, $uName);
                } 
                catch (Exception $ex) 
                {
                    echo '<font>Cant update the user</font>';
                }
                
            }
            require_once 'view/customer/update.php';
            
        }
        
        
}
?>