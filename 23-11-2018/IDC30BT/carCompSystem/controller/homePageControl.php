<?php

class Home {
    
    public  $allSearch;
                function __construct()
    {
        
    }
    public function homePage()
    {
    
     require_once 'view/publicPages/homePage.php';
     
        
    }
    
    public function contact()
    {
        require_once 'view/publicPages/contact.php';
    }

    public function about()
    {
        require_once 'view/publicPages/aboutUs.php';
    }
}

