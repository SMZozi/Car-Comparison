


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
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="?controller=homePage&action=contact">CONTACT US</a></li>
                            <li><a href="?controller=login&action=login">LOGIN</a></li>
                            <li><a href="?controller=homePage&action=about">ABOUT US</a></li
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6" style="color: #A93226"> <em><b>VIEWING CARS</b></em></font>
            


            <form method="get" name="viewcars" onchange="viewcars.submit()">
                              <table>
                <tr>
                    <td>
                        Price Ranges
                        
                    </td>
                    
                    <td>
                        Min Amount
                        <select name="minRange" id="minRange">
                            <option  selected><?php echo $min?></option>
                            <option>25001</option>
                            <option>50001</option>
                            <option>100001</option>
                            <option>200001</option>
                            <option>400001</option>
                        </select>
                    </td>
                    <td>
                        Max Amount
                        <select name="maxRange" id="maxRange">
                            <option selected ><?php echo $max ?></option>
                            <option>50000</option>
                            <option>100000</option>
                            <option>200000</option>
                            <option>400000</option>
                            <option>500000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                   
                
                </tr>
                
                
            </table>
    <?php 
   // echo '<form action="deleteCar.php" method ="POST">';
    echo ' <table align ="center" border ="1"  class="w3-table-all">
                <tr class="w3-red">
                  
                  <th> MAKE </th>
                  <th> MODEL </th>
                  <th> SERIES </th>
                  <th> DEALER NAME </th>
                  <th> DEALER PROVINCE  </th>
                  <th> DEALER CITY </th>
                  <th> DEALER TELL </th>
                  <th> CAR IMAGE </th>
                  <th> COLOUR </th>
                  <th>PRICE</th>
                  
                    
                    
                </tr>';
   if(is_array($cars)) 
   {
       foreach ($cars as $veh)
{
  
   

    echo '<tr><td>'. $veh->make."</td>";
    echo '<td>'. $veh->model."</td>";
    echo '<td>'. $veh->series."</td>";
    echo '<td>'. $veh->dName."</td>";
    echo '<td>'. $veh->dProvince."</td>";
    echo '<td>'. $veh->dCity."</td>";
    echo '<td>'. $veh->dTell."</td>";
    echo '<td><img  Height="150px" src="'.$veh->image .'"alt = "car"Width="200px" /></td>"';
    echo '<td>'. $veh->colour."</td>";
    echo '<td>'. $veh->price."</td>";
     
        
    echo '</tr>';
                
                  
            
} 
   }
echo "</table>";

  
?>
                <input type="hidden" name="controller" value="customer">
                <input type="hidden" name="action" value="view">
     </form>
    </body>
</html> 
