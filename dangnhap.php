<?php
require_once 'connect.php';
session_start();


if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM table1 WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0 ){
        header('Location: dashboard.php');
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];

    }else{
        echo "<script>alert('Thông tin email hoặc mật khẩu sai')</script>";
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


    <title>Đăng Nhập Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800; font-family: 'Merriweather', serif;">ĐĂNG NHẬP</p>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Đăng nhập</button>
            </div>

            <p class="login-register-text">Chưa có tài khoản đăng ký<a href="dangky.php"> tại đây</a>.</p>

        </form>
    </div>
</body>

</html>