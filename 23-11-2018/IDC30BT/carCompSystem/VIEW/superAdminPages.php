<html>
    <head>
        <link href="stylehtml.css" rel="stylesheet" type="text/css"/>
        <title>WELCOME TO SYSTEM ADMIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class ="body">
        <div class="mHeader">
            &nbsp;&nbsp;<span class="style10"><strong>Welcome To :  <?php echo$_SESSION['username']; ?> </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img  Height="90px" src="/Images/cclogo.gif" Width="200px" />

        </div>
                    <div class="menu"> 
                        
                        
                        
                        <ul>
                           
                             
                            <li><a href="?controller=superAdmin&action=addMake"> ADD  CAR MAKE</a></li>
                            <li><a href="?controller=superAdmin&action=addModel">ADD CAR MODEL</a></li>
                            <li><a href="?controller=superAdmin&action=addSeries">ADD CAR SERIES</a></li>
                            <li><a href="?controller=superAdmin&action=systemAdminReport">DEALER REPORT</a></li>
                          
                           <!--<a href='?controller=lecturer&action=showClassList'>Show class list</a><br>-->
                          </ul>
                      

                    </div>
        <div class="mContent" align ="center"> <font size ="6"> USER </font>
        

                    <form action="" method ="">
                <h2>
        Welcome to vehicle comparing system
    </h2>
    <p>
        The home of good, quality and affordable vehicles.</p>
    <p>
   
        &nbsp;
        
        &nbsp;
        
    </p>


    <table>
        <tr>
            <td>
        <img   src="/UploadedPictures/bugatti-logo-wallpapers-5.jpg"  Width="283px" />
        </td>
           <td>
        <img  src="/UploadedPictures/unnamed (1).jpg" Width="317px" /> 
           </td>
           <td>
               <img src="/UploadedPictures/unnamed.jpg" Width="311px" />
           </td>
           
        </tr>
    </table>
        </form>
            
        </div>     
    </body>
    
</html>
