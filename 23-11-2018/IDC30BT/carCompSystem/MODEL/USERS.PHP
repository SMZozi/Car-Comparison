<?php

class User
{
    public $username;
    public $role;


    public function __construct($username, $role)
     {
        $this->username = $username;
        $this->role = $role;
     }
     
     public static function find($username, $password)
     {
         $list = array();
         $db = Db::getInstance();
         $sql = "select ad_username, roleName from tbladministrator a, tblRole r where r.roleNum = a.roleNum and ad_username = '$username' and ad_password = '$password'";
         
         $sqlExe = $db->query($sql);
         
         $i = 0;
         foreach ($sqlExe->fetchAll() as $user)
         {
             $list[] = new User($user['ad_username'], $user['roleName']);
             $i++;
         }
         if($i>0)
         {
             return $list[0];
         }
            else 
                {    
                $query = "select c_username, roleName from tblcustomer c, tblRole r where r.roleNum = c.roleNum and c_username = '$username' and c_password = '$password'";
                $sqlExe = $db->query($query);
                
                        foreach ($sqlExe->fetchAll() as $user)
                        {
                            $list[] = new User($user['c_username'], $user['roleName']);
                            $i++;
                        }
                        if($i>0)
                        {
                            return $list[0];
                        }
                        else 
                            {                            
                            
                $query = "select username, roleName from tblsysadmin s, tblRole r where r.roleNum = s.roleNum and username = '$username' and password = '$password'";
                $sqlExe = $db->query($query);
                
                        foreach ($sqlExe->fetchAll() as $user)
                        {
                            $list[] = new User($user['username'], $user['roleName']);
                            $i++;
                        }
                        if($i>0)
                        {
                            return $list[0];
                        }
                        else 
                        {                            
                            return false;
     
                        }
                            
                            }
                }
     }
}



?>