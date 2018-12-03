<?php

class Dealer {

    public $dealerId;
    function __construct($dealerId) 
    {
        $this->dealerId = $dealerId;
    }

    public static function getDealer($username)
    {
        $sql = "select d.d_dealer_id from tbldealer d, tbladministrator a"
              ." where d.d_dealer_id = a.d_dealer_id"
              ." and ad_username ='$username' ";
        
      $db = Db::getInstance();
      
      $exec = $db->query($sql);
      
      $dealer = array();
      foreach  ($exec->fetchAll() as $row)
      {
          $dealer =  $row['d_dealer_id'];
      }
      return $dealer;
    }
    
    public static function addDealer($dName, $dProvince, $dCity, $dSuburb, $dTell)
    {
        $sql = "insert into tbldealer(d_dealer_name, d_dealer_province, d_dealer_city, d_dealer_suburb, d_dealer_tell )"
                . " values ('$dName', '$dProvince', '$dCity', '$dSuburb', '$dTell' )";
        
        $db = Db::getInstance();
        
        $db->query($sql);
    }
    
    public static function getDealerId()
    {
        $sql = "select max(d_dealer_id) as id from tbldealer";
        $db = Db::getInstance();
        
        $list = array();
        
        $execute = $db->query($sql);
        
        foreach ($execute->fetchAll() as $dId)
        {
            $list =  $dId['id'];
        }
        
        return $list;
    }
}

