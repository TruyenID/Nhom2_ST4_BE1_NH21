<?php
    class Billing extends Db{
        public function countBillings()
        {
        $sql = self::$connection->prepare("SELECT COUNT(`id_bill`) FROM `billing`");
        $sql->execute();
        $item = $sql->get_result()->fetch_row();
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
    }