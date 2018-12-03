<?php

class vehicle {

     public $vehicleId;
    public $vehicleName;
    function __construct($id , $name) 
    {
        $this->vehicleId = $id;
        $this->vehicleName = $name;
    }

      public static function getSpecificCar()
    {
              $sql = "select v_vehicle_id, concat(make,' ',model,' ',series) AS VEHICLE"
                   ." from tblmake ma, tblmodel mo, tblseries se, tblvehicle ve"
                   ." where ma.make_id = ve.m_make_id"
                   ." and mo.model_id = ve.m_model_id"
                   ." and se.series_id = ve.s_series_id";
                   
              $db = Db::getInstance();
              $sqlExecute = $db->query($sql);
              $list = array();
              
              foreach ($sqlExecute->fetchAll() as $data)
              {
                 $list[] = new vehicle($data['v_vehicle_id'], $data['VEHICLE']); 
              }
              return $list;
    }
}

