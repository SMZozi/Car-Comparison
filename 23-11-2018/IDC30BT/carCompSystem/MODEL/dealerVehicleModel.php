<?php

class Dealer_Vehicle {

        public $vehReg;
        public $vehName;
    
        public $make;
        public $model;
        public $series;
        public $dName; 
        public $dProvince; 
        public $dCity; 
        public $dTell;
        public $image;
        public $colour;
        public $price;
                
    
    function __construct($make,$model,$series,$dName,$dProvince,$dCity,$dTell,$image, $colour, $name,$reg, $price) 
    {
        $this->vehName = $name;
        $this->vehReg = $reg;
        
           $this->make = $make;
        $this->model = $model;
        $this->series = $series;
        $this->dName = $dName;
        $this->dProvince  = $dProvince;
        $this->dCity = $dCity;
        $this->dTell = $dTell;
        $this->image = $image;
        $this->colour = $colour;
        $this->price = $price;
    }

     public function getVehicle($username)
    {
        $vehicle = "select  dv_reg_no, concat(dv_reg_no,' ',make,' ',model,' ',series) as vehicle"
            ." from tbldealer de, tbladministrator ad, dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v"
            ." where v.s_series_id = se.series_id"
            ." and v.m_make_id = ma.make_id"
            ." and v.m_model_id = mo.model_id"
            ." and dv.v_vehicle_id = v.v_vehicle_id"
            ." and ad.d_dealer_id = de.d_dealer_id"
            ." and dv.d_dealer_id = de.d_dealer_id"
            . " and ad.ad_username = '$username'";
        $db = Db::getInstance();
        $list = array();
        
        $execute = $db->query($vehicle);
        
        foreach ($execute->fetchAll() as $veh)
        {
            $list[]= new Dealer_Vehicle("","","","","","","","","","",$veh['dv_reg_no'],$veh['vehicle'], "");
        }
        return $list;
    }
    
  
       public static function addAcar($reg, $veId, $dealeId, $dvPrice, $mileage, $image,$colour, $year  )
    {
        $sql = "insert into dealer_vehicle (dv_reg_no,v_vehicle_id, d_dealer_id, dv_price, dv_mileage, dv_image, dv_colour, dv_year) "
        . "values ('$reg',$veId,$dealeId,'$dvPrice','$mileage','$image','$colour','$year')" ;
        
        $db = Db::getInstance();
        try 
        {
            $execute = $db->query($sql);
        } 
        catch (Exception $ex) 
        {
          
            echo '<td>';
            echo '<font color=blue size 1>  CHECK THE FOLLOWING ERROR</font><br>';
            echo '<font color = red size =3>**please choose the different registration</font> ';
            echo '</td>';
        }
       
        
    }
    
    
    
        public static function getCars()
    {
       $query = "select  dv_reg_no,make,model,series, D_DEALER_NAME, d.d_dealer_province, d_dealer_city, d_dealer_tell, dv_image, dv_colour, CONCAT('R',FORMAT(dv_price, 2)) AS price"
                ." from  tbldealer d,dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v"
                ." where v.s_series_id = se.series_id"
                ." and v.m_make_id = ma.make_id"
                ." and v.m_model_id = mo.model_id"
                ." and dv.v_vehicle_id = v.v_vehicle_id"
                ." and mo.model_id = se.model_id"
                ." and ma.make_id = mo.make_id"
                ." and d.d_dealer_id = dv.d_dealer_id"; 
       
        $db = Db::getInstance();
        
        $exec = $db->query($query);
        $list = array();
        
        foreach ($exec->fetchAll() as $search)
        {
            $list[] = new Dealer_Vehicle($search['make'], $search['model'], $search['series'], $search['D_DEALER_NAME'], $search['d_dealer_province'], $search['d_dealer_city'], $search['d_dealer_tell'], $search['dv_image'], $search['dv_colour'], $search['dv_reg_no'],"",$search['price']);
        }
        
        return $list;
        
    }
    
    public static function deleteVehicle($vehReg)
    {
        $sql = "CALL deleteVehicle('$vehReg')";
        
        $db = Db::getInstance();
        //$db->prepare($sql);
        $db->query($sql);
    }
    
    
            public static function searchPriceRanges($minAnt, $maxAmt)
    {
       $query = "select  dv_reg_no,make,model,series, D_DEALER_NAME, d.d_dealer_province, d_dealer_city, d_dealer_tell, dv_image, dv_colour, CONCAT('R',FORMAT(dv_price, 2)) AS price"
                ." from  tbldealer d,dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v"
                ." where v.s_series_id = se.series_id"
                ." and v.m_make_id = ma.make_id"
                ." and v.m_model_id = mo.model_id"
                ." and dv.v_vehicle_id = v.v_vehicle_id"
                ." and mo.model_id = se.model_id"
                ." and ma.make_id = mo.make_id"
                ." and d.d_dealer_id = dv.d_dealer_id"
                ." and dv_price between '$minAnt' AND '$maxAmt'"; 
       
        $db = Db::getInstance();
        
        $exec = $db->query($query);
        $list = array();
        
        foreach ($exec->fetchAll() as $search)
        {
            $list[] = new Dealer_Vehicle($search['make'], $search['model'], $search['series'], $search['D_DEALER_NAME'], $search['d_dealer_province'], $search['d_dealer_city'], $search['d_dealer_tell'], $search['dv_image'], $search['dv_colour'], $search['dv_reg_no'],"",$search['price']);
        }
        
        return $list;
        
    }
    
           public static function dealerReport($make)
    {
       $query = "select  COUNT(dv_reg_no) as carNo,make, D_DEALER_NAME, d.d_dealer_province, d_dealer_city, d_dealer_tell
                 from  tbldealer d,dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v
                 where v.s_series_id = se.series_id
                 and v.m_make_id = ma.make_id
                 and v.m_model_id = mo.model_id
                 and dv.v_vehicle_id = v.v_vehicle_id
                 and mo.model_id = se.model_id
                 and ma.make_id = mo.make_id
                 and d.d_dealer_id = dv.d_dealer_id
		 and ma.make_id = '$make'
		GROUP BY d.d_dealer_id"; 
       
        $db = Db::getInstance();
        
        $exec = $db->query($query);
        $list = array();
        
        $i = 0;
        foreach ($exec->fetchAll() as $search)
        {
            $list[] = new Dealer_Vehicle($search['make'], $search['model'], $search['series'], $search['D_DEALER_NAME'], $search['d_dealer_province'], $search['d_dealer_city'], $search['d_dealer_tell'], $search['dv_image'], $search['dv_colour'],"", $search['carNo'],$search['price']);
            $i++;
        }
        
        
        return $list;
        
    }  
    
           public static function getTotalMake($make)
    {
       $query = "select  COUNT(dv_reg_no) as total, make 
                 from  tbldealer d,dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v
                 where v.s_series_id = se.series_id
                 and v.m_make_id = ma.make_id
                 and v.m_model_id = mo.model_id
                 and dv.v_vehicle_id = v.v_vehicle_id
                 and mo.model_id = se.model_id
                 and ma.make_id = mo.make_id
                 and d.d_dealer_id = dv.d_dealer_id
		 and ma.make_id = '$make'
                 group by make";
       
        $db = Db::getInstance();
        
        $exec = $db->query($query);
        $list = array();
        
        $i = 0;
        foreach ($exec->fetchAll() as $search)
        {
            $list[] = new Dealer_Vehicle($search['total'], $search['model'], $search['series'], $search['D_DEALER_NAME'], $search['d_dealer_province'], $search['d_dealer_city'], $search['d_dealer_tell'], $search['dv_image'], $search['dv_colour'],$search['make'], $search['carNo'],$search['price']);
            $i++;
        }
        
        
        return $list;
        
    }
    
}