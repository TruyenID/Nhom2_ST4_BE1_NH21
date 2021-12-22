<?php
class Billing extends Db
    {
        function taoDonHang($name,$image,$price,$quantity,$idbill){
            $sql = self::$connection->prepare("INSERT INTO `cart`(`name`, `image`, `price`, `quantity`, `id_bill`)
            VALUES ('$name','$image','$price','$quantity','$idbill')");
            $sql->exec($sql);
            //return an object
            //return $sql->execute();
        }
        function taoGioHang($fname,$lname,$email,$city,$country,$tel,$total){
            $sql = self::$connection->prepare("INSERT INTO billing(fname,lname,email,city,country,tel,total)
            VALUES ('$fname','$lname','$email','$city','$country','$tel','$total')");
            $sql->exec($sql);
            $last_id = $conn->lastInsertId();
            return $last_id; //return an object
        }
    }