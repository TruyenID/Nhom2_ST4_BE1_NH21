<?php
    class Manufacture extends Db{
        public function getAllManus()
        {
        $sql = self::$connection->prepare("SELECT * 
        FROM manufactures");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
        }
        public function addManu($name)
        {
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures`(`manu_name`) 
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object
        }   
        public function deleteManu($id)
        {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
        }
        public function getManuById($id)
        {
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        }
        public function editManu($name,$id)
        {       
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=?
        WHERE `manu_id` =?");
        $sql->bind_param("si", $name,$id);
        return $sql->execute();
        }       
        public function countManus()
        {
        $sql = self::$connection->prepare("SELECT COUNT(`manu_id`) FROM `manufactures`");
        $sql->execute();
        $item = $sql->get_result()->fetch_row();
        return $item[0];
        }
    }

