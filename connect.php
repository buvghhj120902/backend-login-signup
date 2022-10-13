<?php

$conn = mysqli_connect("localhost", "root", "", "db");

if(!$conn){
    echo "<script>alert('Kết nối thất bại')</script>";
}
?>