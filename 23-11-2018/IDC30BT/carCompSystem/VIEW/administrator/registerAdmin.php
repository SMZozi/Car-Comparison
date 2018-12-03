<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>ADD DEALER</title>
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
                            
  
                           
                          </ul>
                    </div>
      
        <div class="mContent" align ="center">
        
            <form action="" method ="POST">
                
                
            
            <table align ="center">
                
                   <tr>
                    <td>
                      
                    </td>
                    <td>
                        
                          <label>
                              <font size='4'  style="color: red">REGISTER DEALER DETAILS</font>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                             DEALER NAME
                        </label>
                    </td>
                    <td>
                        <input type="text" name="dName" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                           
                            DEALER PROVINCE
                        </label>
                    </td>
                    <td>
                        
                       <form>
                                <select id="thelist" size="4" name="province" required>
                                    <option>MPUMALANGA</option>
                                    <option>FREESTATE</option>
                                    <option>GAUTENG</option>
                                    <option>LIMPOMPO</option>
                                    <option>KZN</option>
                                    <option>NORTHWEST</option>
                                    <option>NOTHERN CAPE</option>
                                    <option>WESTERN CAPE</option>
                                    <option>EASTERN CAPE</option>
                                    
                                </select>
                            </form>
                        
                    </td>
                </tr>
               
                </tr>
                 <tr>
                    <td>
                        <label>
                            DEALER CITY
                        </label>
                    </td>
                    <td>
                        <input type="text" name="city" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            DEALER SURBUBS
                        </label>
                    </td>
                    <td>
                        <input type="text" name="suburb" required/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            DEALER TELL
                        </label>
                    </td>
                    <td>
                        <input type="number" name="tell" required maxlength="10" minlength="10">
                    </td>
                </tr>
            
              
                
                
                    
                  
                        
                        <tr>
                    <td>
                      
                    </td>
                    <td>
                        
                          <label>
                              <font size='4' style="">REGISTER ADMINISTRATION</font>
                        </label>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>
                            USERNAME
                        </label>
                    </td>
                    <td>
                        <input type="text" name="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            PASSWORD
                        </label>
                    </td>
                    <td>
                        <input type="password" name="password" required>
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        <label>
                            CONFIRM PASSWORD
                        </label>
                    </td>
                    <td>
                        <input type="password" name="confirm" required>
                        <?php   echo $error;?>
                    </td>
                </tr>
                         <tr>
                            <td>
                        <label>
                            
                        </label>
                    </td>
                    <td>
                        <input type="submit" value="submit" name="btnAdd" required>
                        
                    </td>
                </tr>
                        
                    </table>
                
               <input type="hidden" name="controller"value="register" required>
            <input type="hidden" name="action"value="registerAdmin" required>
            
            <tr>
            <td>
                        <label>
                            
                        </label>
                    </td>
   
                    </dv>   
            
      <!--      </table>        
        </form>
            
        </div>     
    </body>
    
</html>-->

