<?php

class registerControl {

    function __construct() 
    {
        
    }

    public static function registerCustomer()
    {
        
            require_once 'view/customer/createAccount.php';  
    }
    
    public static function registerAdmin()
    {
        
        
        if( !isset($_POST['btnAdd']))
        {
           require 'view/administrator/registerAdmin.php'; 
        }
       elseif(isset($_POST['btnAdd']))
        {
        
            
            $dName = $_POST['dName'];
            $dProvince = $_POST['province'];
            $dCity  = $_POST['city'];
            $dSuburb = $_POST['suburb'];
            $dTell = $_POST['tell'];
            
            $username = $_POST['username'];
            $password  = $_POST['password'];      
            $confirm  = $_POST['confirm'];
            if($password == $confirm && strlen($dTell) == 10)
            {
            
               
                try {
                     Dealer::addDealer($dName, $dProvince, $dCity, $dSuburb, $dTell);
                $getDealer = Dealer::getDealerId();
                    Admin::addAdmin($username, $password, $getDealer);
                } catch (Exception $ex) {
                    echo 'USER ALREADY EXIST';
                }
                
                
                require_once 'view/login.php';
            }
        
            elseif ($password != $confirm)
                {
                    require 'view/administrator/registerAdmin.php'; 
                    echo '<font color ="red">password doesn`t match</font><br>';
                    
               
                
                }
                
                elseif(strlen($dTell) != 10)
                {
                    require 'view/administrator/registerAdmin.php'; 
                    echo '<font color ="red">Check your Tell length</font><br>';
                    
               
                
                }
        
        }
    }
}