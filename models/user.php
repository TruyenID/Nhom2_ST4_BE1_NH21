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
        public function addUser($username,$password,$role_id)
        {
        $sql = self::$connection->prepare("INSERT 
        INTO `user`(`username`, `password`, `role_id`) 
        VALUES (?,?,?)");
        $sql->bind_param("siiiss", $username,$password,$role_id);
        return $sql->execute(); //return an object
        }  
    }
