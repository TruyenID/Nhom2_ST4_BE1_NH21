<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//bai1
class User{
    public $username;
    public $password;
    public $fistname;
    public $lastname;
    //bai2
    public function __construct($username,$password,$fistname,$lastname){
        $this->username = $username;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        $this->fistname = $fistname;
        $this->lastname = $lastname;
    }
    public function getFullname(){
        return $this->fistname." ".$this->lastname;
    }
    public function getUserName(){
        return $this->username;
    }
    public function login($username,$password){
        $hash = password_hash("12345",PASSWORD_DEFAULT);
        if($username == "admin" && password_verify($password,$hash)){
            return true;
        }
    }
}
?>
</body>
</html>
