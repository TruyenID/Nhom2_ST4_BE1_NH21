<?php
    class User extends Db{
        public function checkLogin($username,$password)
        {
            $sql = self::$connection->prepare("SELECT * FROM user WHERE `username`=? AND `password`=?");
            $password = md5($password);
            $sql->bind_param("ss",$username,$password);
            $sql->execute();
            //$items = array();
            $items = $sql->get_result()->num_rows;
            if($items == 1){
                return true;
            }
            else{
                return false;
            }
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
    }
