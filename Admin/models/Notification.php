<?php
    class Notification extends Db
    {
        public function getAllNotification()
        {
            $sql = self::$connection->prepare("SELECT * 
            FROM notification");
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
        public function getNotificationById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM  `notification` WHERE `id` = ?");
            $sql->bind_param("i",$id);
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function deleteNotification($id)
        {
            $sql = self::$connection->prepare("DELETE FROM `notification` WHERE `id` = ?");
            $sql->bind_param("i", $id);
            return $sql->execute(); //return an object
        }
        public function addNotification($value,$image)
        {
            $sql = self::$connection->prepare("INSERT 
            INTO `notification`(`value`, `image`) 
            VALUES (?,?)");
            $sql->bind_param("ss",$value,$image);
            return $sql->execute(); //return an object
        }
        public function editNotification($value,$image,$id)
        {
        if($image == null){
            $sql = self::$connection->prepare("UPDATE `notification` SET `value`=?,
            `image`=? WHERE `id` =?");
            $sql->bind_param("sss", $value,$image,$id);
        }else{
            $sql = self::$connection->prepare("UPDATE `notification` SET `value`=?,
            `image`=? WHERE `id` =?");
            $sql->bind_param("sss", $value,$image,$id);
        }
        return $sql->execute(); //return an object
    }          
}
?>