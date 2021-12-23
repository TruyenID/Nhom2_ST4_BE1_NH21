<?php
    class Product extends Db{
        public function getAllProducts()
        {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id
        ORDER BY id DESC
        ");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
        }
        public function addProducts($name,$manu_id,$type_id,$price,$image,$desc)
        {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`) 
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("siiiss", $name,$manu_id,$type_id,$price,$image,$desc);
        return $sql->execute(); //return an object
        }      
        public function deleteProducts($id)
        {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
        }
        public function getProductById($id)
        {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        }
        public function editProducts($name,$manu_id,$type_id,$price,$image,$desc,$id)
        {
        if($image == null){
            $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,
            `manu_id`=?,`type_id`=?,`price`=?,`description`=? WHERE `id` =?");
            $sql->bind_param("siiisi", $name,$manu_id,$type_id,$price,$desc,$id);
        }
        else{
            $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,
            `manu_id`=?,`type_id`=?,`price`=?,`image`=?,`description`=? WHERE `id` =?");
            $sql->bind_param("siiissi", $name,$manu_id,$type_id,$price,$image,$desc,$id);
        }     
        return $sql->execute(); //return an object
        }
        public function countProducts()
        {
        $sql = self::$connection->prepare("SELECT COUNT(`id`) FROM `products`");
        $sql->execute();
        $item = $sql->get_result()->fetch_row();
        return $item[0];
        }
    }
