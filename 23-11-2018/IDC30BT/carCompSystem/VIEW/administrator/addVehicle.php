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
                            
                            <li><a href="?controller=admin&action=home">HOME</a></li>
                           <<li><a href="?controller=admin&action=addFeature">ADD A FEATURE</a></li>
                           <li><a href="?controller=admin&action=view">VIEW VEHICLE</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> ADD A CAR</font>
        
            <form action="" method ="POST" enctype="multipart/form-data">
            
            <table align ="center">
                <tr>
                    <td>
                        <label>
                             REGISTRATION NO
                        </label>
                    </td>
                    <td>
                        <input type="text" name="carReg" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                           
                            SELECT CAR
                        </label>
                    </td>
                    <td>
                        <?php
                               echo "<select name='vId'>";
                               foreach ($allVehicle as $speVehicle)  
                              {
                                 
                                  echo "<option value='" .$speVehicle->vehicleId ."'>" . $speVehicle->vehicleName ."</option>";
                              }
                              echo "</select>";
                        ?>
                       
                        
                    </td>
                </tr>
               
                </tr>
                 <tr>
                    <td>
                        <label>
                            ENTER PRICE
                        </label>
                    </td>
                    <td>
                        <input type="text" name="price" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            ENTER THE MILEAGE
                        </label>
                    </td>
                    <td>
                        <input type="text" name="mileage" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            CHOOSE IMAGE
                        </label>
                    </td>
                    <td>
                        <input type="file" name="fileupload" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            COLOUR
                        </label>
                    </td>
                    <td>
                        <input type="text" name="colour" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            YEAR
                        </label>
                    </td>
                    <td>
                      <div>
                            <form>
                                <select id="thelist" size="4" name="year" required >
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                </select>
                            </form>
                        </div>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            
                        </label>
                    </td>
                    <td>
                        <input type="submit" value="submit" name="btnAdd" >
                    </td>
                </tr>
               <input type="hidden" name="controller"value="admin" >
            <input type="hidden" name="action"value="addVehicle" >
            
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

