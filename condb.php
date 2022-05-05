<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "baiviet";
$con = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($con, 'UTF8');
if (mysqli_connect_errno()) {
    echo "Kết nối thất bại!".mysqli_connect_errno();exit;
}
?>