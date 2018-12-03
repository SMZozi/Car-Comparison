<?php

class Admin {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
      

    
  
    
 
    
    
    
    public static function getFeatures($reg)
    {
        $sql = "select f.f_feature_id, f_feature_desc from tblfeature f, dv_feature dv "
                . " where f.f_feature_id = dv.f_feature_id"
                . " and dv_reg_no = '$reg'";
        
        $db = Db::getInstance();
        $exe = $db->query($sql);
        
        $list = array();
        
        foreach ($exe->fetchAll() as $row)
        {
            $list [] = new Admin($row['f_feature_id'], $row['f_feature_desc']);
            
        }
        return $list;
    }
      
    public static function addAdmin($username, $password, $dId)
    {
        $sql = "insert into tbladministrator(ad_username, ad_password, d_dealer_id)"
                ." values ('$username','$password', $dId)";
        
        $db = Db::getInstance();
        $db->query($sql);
    }
        

}

