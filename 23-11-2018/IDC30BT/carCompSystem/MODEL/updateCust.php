<?php

class Customer {

        public $email;
        public $fName;
        public $lName;
        public $idNo; 
        public $poBox; 
        public $cCity; 
        public $pCod;
        public $province;
        public $cell;
        public $tell;
        
        function __construct($email, $fName, $lName, $idNo, $poBox, $cCity, $pCod, $province, $cell, $tell) 
        {
             $this->email = $email;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->idNo = $idNo;
        $this->poBox  = $poBox;
        $this->cCity = $cCity;
        $this->pCod = $pCod;
        $this->province = $province;
        $this->cell = $cell;
        $this->tell = $tell;
        }
        
        public  function getCustomer($username) 
    {
        $sql = "SELECT * FROM tblcustomer where c_username = '$username'";
        $db = Db::getInstance();
        
        $exec = $db->query($sql);
        $list = array();
        
        foreach ($exec->fetchAll() as $cust)
        {
            
            $list[] = new Customer($cust['c_email_address'], $cust['c_first_name'], $cust['c_last_name'], $cust['c_IDNo'], $cust['c_poAdd_PBox'], $cust['c_poAdd_City'], $cust['c_poAdd_PostalCode'], $cust['c_poAdd_Province'], $cust['c_cellNo'], $cust['c_tellNo']);
            
        }
        
        return $list;
        
    }
    
    public function updateCust($email, $fName, $lName, $idNo, $poBox, $cCity, $pCod, $province, $cell, $tell, $uName)
    {
        
        $sql = "update tblcustomer"
        . " SET c_email_address = '$email',"
        . " c_first_name = '$fName',"
        . " c_last_name = '$lName',"
        . " c_IDNo = '$idNo',"
        . " c_poadd_PBox = '$poBox',"
        . " c_poaDD_City = '$cCity',"
        . " c_poAdd_postalcode = '$pCod',"
        . " c_poadd_Province = '$province',"
        . " c_cellNo = '$cell',"
        . " c_tellNo = '$tell' "
        . " where c_username  = '$uName'";
        
echo $sql;
        
        $db = Db::getInstance();
        
        $db->prepare($sql);
        $db->query($sql);
        
        
    }

}
?>
