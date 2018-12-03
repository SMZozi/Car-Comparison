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
                            <li><a href="?controller=superAdmin&action=addMake"> ADD  CAR MAKE</a></li>
                            <li><a href="?controller=superAdmin&action=addModel">ADD CAR MODEL</a></li>
                            <li><a href="?controller=superAdmin&action=addSeries">ADD CAR SERIES</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> VIEW DEALERS WITH THEIR CARS</font>
            

            <form name="form1" onchange="form1.submit()">
                <table align="center"><tr><td>
                            Choose Make 
                            <select name="make">
                    
                
    <?php 
      echo "<option value ="."select>";
    foreach ($getMake as $ma)
    {
       
        echo "<option value =". $ma->makeId.">".$ma->makeName;
    }
  echo '</select>';
  
  
  //echo "<td><input type ='submit' value ='search' name ='btnSearch'</td>";
  echo "</td></tr></table>";
    echo ' <table align ="center" border ="1" class="w3-table-all">
                <tr class="w3-red">
                  
                  <th> NUMBER OF VEHICLE MAKE PER DEALER </th>
                  <th> MAKE </th>
                  <th> DEALER NAME </th>
                  <th> PROVINCE </th>
                  <th> CITY </th>
                  <th> TELL</th>
                  
                  
                    
                    
                </tr>';
    foreach ($report as $rep)
{
    echo '<tr>';
    echo '<td>'. $rep->vehReg."</td>";
    echo '<td>'. $rep->make."</td>";
    echo '<td>'. $rep->dName."</td>";
    echo '<td>'. $rep->dProvince."</td>";
    echo '<td>'. $rep->dCity."</td>";
    echo '<td>'. $rep->dTell."</td>";
   // echo "<td><input type ='submit' value ='Delete' name ='delete'</td>";
    
    
        
    echo '</tr>';
                
                  
            
}            
echo "</table>";

foreach ($totalMake as $total)
{
echo "<font size =3 color =red ><b>The total cars that we have on ".$total->vehName." is ".$total->make."</b></font>";
}
   echo '<input type="hidden" name="controller" value="superAdmin" />';
    echo '<input type="hidden" name="action" value="systemAdminReport" />';
?>
   </form>           
     
    </body>
</html> 
