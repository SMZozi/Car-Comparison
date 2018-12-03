<?php
class loginController
{
    public function login()
    {
        $username = filter_input(INPUT_POST, "username")? filter_input(INPUT_POST, "username"):'';
        $password = filter_input(INPUT_POST, "password")? filter_input(INPUT_POST, "password"):'';
        
        $user = User::find($username,$password);
        if (!$user)
        {
            //echo 'please provide the correct user details';
            $error = "incorrect username or password";
            include 'view/login.php';
        }
        else
        {
            $user = User::find($username,$password);
            //session_cache_limiter(FALSE);
            session_start();
            $_SESSION['username'] = $user->username;
            if($user->role == 'customer')
            {
               require_once 'view/custPages.php';
            }
           elseif ($user->role == 'admin')
          {
            require_once 'view/adminPages.php';
          }
            elseif ($user->role == 'superAdmin')
          {
            require_once 'view/superAdminPages.php';
            
          }
        }
    }
    }
    ?>