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
    }
?>