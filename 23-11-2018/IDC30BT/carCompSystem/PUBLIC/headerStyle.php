
<html>
    <head>
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>HOME PAGE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class ="body">
        <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>CAR COMPARING SYSTEM<?php echo $_SESSION['ad_username']; ?> </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />

        </div>
                    <div class="menu"> 
                        
                        
                        
                        <ul>
                            <li><a href="?controller=admin&action=home">HOME</a></li>
                           <li><a href="?controller=admin&action=addVehicle">ADD A VEHICLE</a></li>
                           <li><a href="?controller=admin&action=view">VIEW VEHICLE</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                           <!--<a href='?controller=lecturer&action=showClassList'>Show class list</a><br>-->
                          </ul>
                      

                    </div>
        

