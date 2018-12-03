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
                            
                            
                            <li><a href="?controller=superAdmin&action=addModel">ADD CAR MODEL</a></li>
                            <li><a href="?controller=superAdmin&action=addSeries">ADD CAR SERIES</a></li>
                            <li><a href="?controller=superAdmin&action=systemAdminReport">DEALER REPORT</a></li>
                           <li><a href="index.php">LOG OUT</a></li>
                          </ul>
                    </div>
        <div class="mContent" align ="center"> <font size ="6"> ADD MAKE</font>
        
            <form action="" method ="GET">
            
            <table align ="center">

                 <tr>
                    <td>
                        <label>
                            Make name
                        </label>
                    </td>
                    
                    <td>
                        <input type="text" name="make" required>
                    </td>
                 </tr>
                 <tr>
                     <td>
                         
                     </td>
                    <td>
                        <input type="submit" value="submit" name="btnAdd">
                    </td>
                </tr>
               <input type="hidden" name="controller"value="superAdmin">
            <input type="hidden" name="action"value="addMake">
            
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

