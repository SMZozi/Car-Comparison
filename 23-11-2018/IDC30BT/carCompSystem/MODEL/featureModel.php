<?php

class Feature {

    public $fId;
    public $featName;
    function __construct($id, $name) 
    {
        $this->fId = $id;
        $this->featName = $name; 
    }

        public function getFeature()
    {
        $feature = "select f_feature_id, f_feature_desc from tblfeature";
        $db = Db::getInstance();
        $list = array();
        
        $execute = $db->query($feature);
        
        foreach ($execute->fetchAll() as $feat)
        {
            $list[]= new Feature($feat['f_feature_id'],$feat['f_feature_desc']);
        }
        return $list;
    }
    
              public static function addFeature($feature, $vehicle)
    {
         $sql = "insert into dv_feature(f_feature_id, dv_reg_no)"
         ." values ('$feature', '$vehicle')";
         $db = Db::getInstance();
         $execute = $db->query($sql);
                 
    }

}

