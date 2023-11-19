<?php
    $host = 'localhost';
    $db = 'qlthuvien';
    $user = 'root';
    $pass = '';
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_set_charset($conn, 'utf8mb4');
    if ($conn->connect_error){
        die("Kết nối không thành công: " . $conn->connect_error);
    }
?>