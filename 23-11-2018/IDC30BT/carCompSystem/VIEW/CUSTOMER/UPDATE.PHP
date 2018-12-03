<html>
   <head>
        <meta charset="UTF-8">
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>UPDATE MEMBER DETAILS</title>
    </head>
    <body class="body">
        
        <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>CAR COMPARING SYSTEM </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />
        </div>
         <div class="menu"> 
                        <ul>
                            <li><a href="homePage.html">HOME</a></li>
                            <li><a href="viewDetails.php">VIEW CARS / DELETE CAR</a></li>
                            <li><a href="updateCustomer.php">UPDATE CUSTOMER</a></li>
                            <li><a href="index.html">INSERT CUSTOMER</a></li>
                            <li><a href="addFeature.php">ADD A FEATURE</a></li>
                            <li><a href="addVehicle.php">ADD A VEHICLE</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> PERSONAL DETAILS</font>
            <form action="" method="GET">
    <?php 

foreach ($customer as $cust)
 {?>
            
            <table align ="center">
                
                <tr></tr>
                <tr>
                    
                    <td align ="right" height ="50">
                        <div class="label">E-MAIL ADD
                        </div>
                        
                    </td>
                    
                    <td>
                        <div >
                            <input  type="email" name="email" required placeholder="Enter a valid email address" value="<?php echo $cust->email; ?>" >
                        </div>
                    </td>
                </tr>
                <tr></tr>
                
                <tr>
                    <td align ="right" height ="50">
                        <div class="label">FIRST NAME
                        </div>
                    </td> 
                    <td>
                        <div>
                            <input type="text" name ="firstname" required value="<?php echo $cust->fName; ?>" >
                        </div>
                    </td>
                </tr>
                <tr></tr>
            
                <tr>
                    <td align ="right" height ="50">
                       <div class="label"> LAST NAME
                       </div>
                    </td>
                    
                    <td>
                        <div>
                            <input type="text" name ="lastname" required value="<?php echo $cust->lName; ?>">
                        </div>
                    </td>
                </tr>
                <tr></tr>
               
                <tr>
                    <td align ="right" height ="50">
                        <div class="label">ID NO
                        </div>
                    </td>
                    
                    <td>
                        <div>
                            <input type="text" name ="idNo" value="<?php echo $cust->idNo; ?>" required>
                        </div>
                    </td
                </tr>
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                       <div class="label"> POST BOX
                       </div>
                    </td>
                    <td>
                        <div>
                            <input type="text" name ="postBox" value="<?php echo $cust->poBox; ?>" required>
                        </div>
                    </td>
                    
                </tr>
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                        <div class="label">CITY
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="text" name ="city" value="<?php echo $cust->cCity; ?>" required>
                        </div>
                    </td>
                    
                </tr>
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                        <div class="label">CODE
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="text" name ="code" value="<?php echo $cust->pCod; ?>" required>
                        </div>
                    </td>
                    
                </tr
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                       <div class="label"> PROVINCE
                       </div>
                    </td>
                    <td>
                        <div class="dropdown-content">
                            <select name="province"  required id="<?php echo $cust->province; ?>">
                                <option>MPUMALANGA</option>
                                <option>GAUTENG</option>
                                <option>NORTH WEST</option>
                                <option>EASTERN CAPE</option>
                                <option>WESTERN CAPE</option>
                                <option>FREE STATE</option>
                                <option>KZN</option>
                                <option>NORTHERN CAPE</option>
                                <option>LIMPOMPO</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                       <div class="label"> CELL NUMBER
                       </div>
                    </td>
                    <td>
                        <div>
                            <input type="text" name ="cellNo" value="<?php echo $cust->cell; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align ="right" height ="50">
                        <div class="label">TELL NUMBER
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="text" name ="tellNo" value="<?php echo $cust->tell; ?>" required>
                        </div>
                    </td>
                    
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td>
                        <div>
                            <input type="submit" name="btnInsert" value="OK"/>
                        </div>
                    </td>
                </tr>
            
            </table>
                <input type="hidden" name="controller" value="customer">
                <input type="hidden" name="action" value="updateCustomer">
  <?php	}
	?>
</form>
     
    </body>
</html>