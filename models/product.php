<?php
class Product extends Db
    {
        public function getAllProducts()
        {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function getAllProduct()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }     
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductByType($type_id,$page,$perpage)
    {
        //Tính số thứ tự trang bắt đâu
        $firstLink = ($page - 1) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id,$firstLink,$perpage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function paginate($url,$total,$perpage)
    {
        $totalLinks = ceil($total / $perpage);
        $link = "";
        for($j = 1; $j <= $totalLinks;$j++){
            $link = $link . "<li><a href='$url?page=$j'>$j </a></li>";
        }
        return $link;
    }
    
    public function getNProductLapTop()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = 2 ORDER BY created_at DESC LIMIT 10 ");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNProductSmartPhone()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = 1 ORDER BY created_at DESC LIMIT 10 ");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    } 
    public function getNProductTablet()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = 3 ORDER BY created_at DESC LIMIT 10 ");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNProductAcc()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = 4 ORDER BY created_at DESC LIMIT 10 ");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
