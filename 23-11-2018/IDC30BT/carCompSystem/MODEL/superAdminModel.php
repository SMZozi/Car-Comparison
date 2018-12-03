<?php

class superAdminModel 
{

    public $make;
    public $makeId;
    public $makeName;
    public $modelName;
    public $modelId;
            
            
            function __construct($Id, $Name) 
    {
                $this->makeId = $Id;
                $this->makeName = $Name;
                $this->modelId = $Id;
                $this->modelName = $Name;
    }
    
    public static function setValues( $modelId, $modelName)
    {
        
        
    }

            public static function newMake($make)
    {
        $sql = "insert into tblmake(make)"
                ." values ('$make')";
        
        $db = Db::getInstance();
        
        $db->query($sql);
        
        
        
    }

    public static function getMake()
    {
        $sql = "select * from tblmake";
        
        $db = Db::getInstance();
        $list = array();
        $exec = $db->query($sql);
        
        foreach ($exec->fetchAll() as $make)
        {
            $list[] = new superAdminModel($make['make_id'], $make['make']);
        }
        
        return $list;
    }
    
    public static function newModel($makeId, $model)
    {
        $sql = "insert into tblmodel(model, make_id) "
                . " values('$model', $makeId)";
        
        $db = Db::getInstance();
        $db->query($sql);
    }
    
    public static function getModel()
    {
        $sql = "select concat(model,' (',make,')') as model, m.model_id "
                ." from tblmodel m, tblmake ma "
                ." where m.make_id = ma.make_id";
        
        $db = Db::getInstance();
        
        $list = array();
        $exec = $db->query($sql);
        
        foreach ($exec->fetchAll() as $model)
        {
            
           $list[] = new superAdminModel($model['model_id'], $model['model']);
        
        }
        
        return $list;
    }
    
    public static function newSeries($seriesName, $modelId)
    {
          $sql = " call AddVehicle('$seriesName', '$modelId' ) ";
          
           $db = Db::getInstance();
           $db->query($sql);
    }
}

