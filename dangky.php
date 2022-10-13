<?php
require_once 'connect.php';
if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $email = $_POST['email'];
    //   md5 mã hóa mật khẩu
      $password = md5($_POST['password']); 
      $cpassword = md5( $_POST['cpassword']);

      if($password == $cpassword){

        $sql = "SELECT * FROM table1 WHERE email = '$email' ";
        $result = mysqli_query($conn, $sql);

        if(!$result->num_rows > 0){

            $sql = "INSERT INTO table1 (name, email, password) VALUE('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Đăng ký tài khoản thành công')</script>";
            }

        }else{
            echo "<script>alert('Email này đã được sử dụng')</script>";
        }


      }else{
        echo "<script>alert('Mật khẩu nhập lại không đúng')</script>";
      }


}














?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">


    <title>ĐĂNG KÝ Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800; font-family: 'Merriweather', serif;;">ĐĂNG KÝ</p>

            <div class="input-group">
                <input type="text" placeholder="Họ và tên" name="username"  required>
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Nhập lại mật khẩu" name="cpassword"required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">ĐĂNG KÝ</button>
            </div>

            <p class="login-register-text">Đã có tài khoản đăng nhập<a href="dangnhap.php"> ở đây</a>.</p>

        </form>
    </div>
</body>

</html>