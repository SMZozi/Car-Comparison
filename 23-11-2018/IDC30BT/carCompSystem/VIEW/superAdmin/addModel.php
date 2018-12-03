<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>ADD VEHICLE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class ="body">
        <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>CAR COMPARING SYSTEM </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />
        </div>
         <div class="menu"> 
                        <ul>
                            
                            
                            <li><a href="?controller=superAdmin&action=addMake"> ADD  CAR MAKE</a></li>
                            <li><a href="?controller=superAdmin&action=addSeries">ADD CAR SERIES</a></li>
                            <li><a href="?controller=superAdmin&action=systemAdminReport">DEALER REPORT</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> ADD MODEL</font>
        
            <form action="" method ="GET">
            
            <table align ="center">

                <tr>
                    <td>
                        <label>
                            Choose Make
                        </label>
                    </td>
                    
                    <td>
                      <?php  echo '<select name="make">';
                      echo "<option value=''>".$make."</option>";
              foreach ($getMake as $make)
             {
                  
                echo '<option value='.$make->makeId.'>'.$make->makeName.'</option>';
             }
             ?>
            </select>
                    </td>
                 </tr>
                 <tr>
                    <td>
                        <label>
                            Model Name
                        </label>
                    </td>
                    
                    <td>
                        <input type="text" name="model" required>
                    </td>
                 </tr>
                 <tr>
                     <td>
                         
                     </td>
                    <td>
                        <input type="submit" value="submit" name="btnAddModel">
                    </td>
                </tr>
               <input type="hidden" name="controller"value="superAdmin">
            <input type="hidden" name="action"value="addModel">
            
            <tr>
            <td>
                        <label>
                            
                        </label>
                    </td>
   
            
            
      <!--      </table>        
        </form>
            
        </div>     
    </body>
    
</html>-->

