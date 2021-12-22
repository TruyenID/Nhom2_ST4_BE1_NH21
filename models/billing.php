<?php
class Billing extends Db
    {
        function addCart($name,$image,$price,$quantity,$idBill){
            $sql = self::$connection->prepare("INSERT 
            INTO `cart`(`name`, `image`, `price`, `quantity`, `id_bill`)
            VALUES (?,?,?,?,?)");
            $sql->bind_param("ssiii",$name,$image,$price,$quantity,$idBill);;
            return $sql->execute();
        }
        function addBilling($fname,$lname,$email,$city,$country,$tel){
            $sql = self::$connection->prepare("INSERT
            INTO `billing`(`fname`, `lname`, `email`, `city`, `country`, `tel`) 
            VALUES (?,?,?,?,?,?)");
            $sql->bind_param("sssssi",$fname,$lname,$email,$city,$country,$tel);
            $sql->execute();
            $IDsql = self::$connection->prepare("SELECT * FROM `billing` ORDER BY `id_bill` DESC LIMIT 1");
            $IDsql->execute();
            //$items = 0;
            $item = $IDsql->get_result()->fetch_row();
            return $item[0];
        }
        public function getAllBilling()
        {
            $sql = self::$connection->prepare("SELECT * FROM `billing`");
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
        public function getAllCart($idBill)
        {
            $sql = self::$connection->prepare("SELECT * FROM `cart` WHERE `id_bill`= ? ");
            $sql->bind_param("i",$idBill);
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
        public function getBillingById($idBill)
        {
        $sql = self::$connection->prepare("SELECT * FROM `billing` WHERE `id_bill` = ?");
        $sql->bind_param("i",$idBill);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        }
        public function deleteProducts($idBill)
        {
        $sql = self::$connection->prepare("DELETE FROM `billing` WHERE `id_bill`=?");
        $sql->bind_param("i", $idBill);
        return $sql->execute(); //return an object
        }
    }