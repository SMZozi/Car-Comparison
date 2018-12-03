
<html>
        <head>
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body">
         <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>CAR COMPARING SYSTEM </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />
        </div>
        <title>login</title>
         <div class="menu"> 
                        
                        
                        
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="?controller=homePage&action=contact">CONTACT US</a></li>
                            <li><a href="?controller=homePage&action=about">ABOUT US</a></li>
                          </ul>
                      

                    </div>
        
        <div class="mContent" align ="center"> <font size ="6" color="red"> LOG IN DETAILS</font>
        <form action ="" method ="POST">
            <table>
                <tr>
                    <td align="center"> 
                        <label>username</label>
                        <input type =text name =username><br><br>
                    </td>

                    
                </tr>
                <tr>
                    <td align="center">
                        <label>password</label>
                        <input type =password name =password><br><?php $error?><br>
                    </td>
                </tr>
                <tr>
                        <td>
                            <input type =submit name =btnSubmit value ="LOG IN"/><br>
                <li><a href="?controller=register&action=registerAdmin" style="color: blue">Click here to register as a dealer</a></li>
                
                           
                        </td>
                </tr>
              </table>
            
               <input type =hidden name =controller value =login>
               <input type =hidden name =action value =login> 
            
        </form>
    </body>
</html>

