<?php
    class User extends Db{
        public function addUser($username,$password,$role_id)
        {
            $sql = self::$connection->prepare("INSERT 
            INTO `user`(`username`, `password`, `role_id`) 
            VALUES (?,?,?)");
            $sql->bind_param("sii",$username,$password,$role_id);
            return $sql->execute(); //return an object
        }
        public function getAllUser()
        {
        $sql = self::$connection->prepare("SELECT * 
        FROM user");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
        }
        public function getUserById($user_id)
        {
        $sql = self::$connection->prepare("SELECT * FROM  `user` WHERE `user_id` = ?");
        $sql->bind_param("i",$user_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        }
        public function editUser($username,$password,$role_id,$user_id)
        {       
            $sql = self::$connection->prepare("UPDATE `user` SET `username`=?,`password`=?,`role_id`=?
            WHERE `user_id` =?");
            $sql->bind_param("ssss", $username,$password,$role_id,$user_id);
            return $sql->execute();
        }
        public function deleteUser($user_id)
        {
        $sql = self::$connection->prepare("DELETE FROM `user` WHERE `user_id` = ?");
        $sql->bind_param("i", $user_id);
        return $sql->execute(); //return an object
        }         
    }   
?>