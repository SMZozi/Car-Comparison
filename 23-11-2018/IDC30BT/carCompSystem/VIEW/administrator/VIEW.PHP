


<html>
   <head>
        <meta charset="UTF-8">
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>VIEW CARS</title>
    </head>
    <body class="body">
        
        <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>CAR COMPARING SYSTEM </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />
        </div>
         <div class="menu"> 
                        <ul>
                             <li><a href="?controller=admin&action=home">HOME</a></li>
                           <<li><a href="?controller=admin&action=addFeature">ADD A FEATURE</a></li>
                           <li><a href="?controller=admin&action=addVehicle">ADD A VEHICLE</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> VIEWING CARS</font>
            

    <?php 
   // echo '<form action="deleteCar.php" method ="POST">';
    echo ' <table align ="center" border ="1" class="w3-table-all">
                <tr class="w3-red">
                  <th> REGISTRATION </th>
                  <th> MAKE </th>
                  <th> MODEL </th>
                  <th> SERIES </th>
                  <th> CAR IMAGE </th>
                  <th> COLOUR </th>
                  
                  
                  
                    
                    
                </tr>';
    foreach ($dealerCars as $veh)
{
    echo '<form><tr>';
   

    echo '<td><input type=text name=regno readonly value="'.$veh->carReg.'"</td>';
    echo '<td>'. $veh->make."</td>";
    echo '<td>'. $veh->model."</td>";
    echo '<td>'. $veh->series."</td>";
    echo '<td><img  Height="150px" src="'.$veh->image .'"alt = "car"Width="200px" /></td>"';
    echo '<td>'. $veh->colour."</td>";
    echo "<td><input type ='submit' value ='Delete' name ='delete'</td>";
    
    
    echo '<input type="hidden" name="controller"value="admin" class=delete_btn>';
    echo '<input type="hidden" name="action"value="view" >';     
    echo '</tr><form>';
                
                  
            
}            
echo "</table>";

  
?>
              
     
    </body>
</html> 
