<?php

class search {

        public $carReg;
        public $make;
        public $model;
        public $series;
        public $dName; 
        public $dProvince; 
        public $dCity; 
        public $dTell;
        public $image;
        public $colour;
    function __construct($make,$model,$series,$image, $colour, $reg) 
    {
        $this->make = $make;
        $this->model = $model;
        $this->series = $series;
        $this->dName = $dName;
        $this->dProvince  = $dProvince;
        $this->dCity = $dCity;
        $this->dTell = $dTell;
        $this->image = $image;
        $this->colour = $colour;
        $this->carReg = $reg;
        
    }
    
    public static function getCars($username)
    {
       $query = "select  dv_reg_no,make,model,series, D_DEALER_NAME, d.d_dealer_province, d_dealer_city, d_dealer_tell, dv_image, dv_colour"
                ." from  tbldealer d,dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v, tbladministrator a"
                ." where v.s_series_id = se.series_id"
                ." and v.m_make_id = ma.make_id"
                ." and v.m_model_id = mo.model_id"
                ." and dv.v_vehicle_id = v.v_vehicle_id"
                ." and mo.model_id = se.model_id"
                ." and ma.make_id = mo.make_id"
                ." and d.d_dealer_id = dv.d_dealer_id"
                . " and a.d_dealer_id = d.d_dealer_id"
                . " and a.ad_username = '$username'"; 
       
        $db = Db::getInstance();
        
        $exec = $db->query($query);
        $list = array();
        
        foreach ($exec->fetchAll() as $search)
        {
            $list[] = new search($search['make'], $search['model'], $search['series'], $search['dv_image'], $search['dv_colour'], $search['dv_reg_no']);
        }
        
        return $list;
        
    }
            

}

