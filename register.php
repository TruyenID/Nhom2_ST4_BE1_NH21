<?php
require "config.php";
require "models/db.php";
require "models/products.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
$getProduct = $product->getAllProduct();

if (isset($_POST["btn_submit"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($username == "" || $password == "" || $name == "" || $email == "") {
        echo "bạn vui lòng nhập đầy đủ thông tin";
   }else{
           // Kiểm tra tài khoản đã tồn tại chưa
           $sql="select * from users where username='$username'";
         $kt=mysqli_query($connection, $sql);

         if(mysqli_num_rows($kt)  > 0){
             echo "Tài khoản đã tồn tại";
         }else{
             //thực hiện việc lưu trữ dữ liệu vào db
             $sql = "INSERT INTO accounts(
                 username,
                 password,
                 name,
                 email
                 ) VALUES (
                 '$username',
                 '$password',
                 '$name',
                 '$email'
                 )";
             // thực thi câu $sql với biến conn lấy từ file connection.php
                mysqli_query($connection,$sql);
                echo "chúc mừng bạn đã đăng ký thành công";
         }       
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
    </head>
    <body>
        <h1>Trang đăng ký thành viên</h1>
        <form action="register.php" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="username" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="password" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="fullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="email" size="50" />
                    </td>
                </tr>
            </table>
            <input type="submit" name="btn_submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
    </body>
</html>