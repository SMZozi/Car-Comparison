<?php
        require_once 'conn.php';
        if (isset($_GET['controller'])  && isset($_GET['action']))
        {
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        }
        else 
        {
            $controller = 'homePage';
            $action = 'homePage';
        }
        require_once 'route.php';
?>