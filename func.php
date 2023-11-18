<?php
// connect
    function connectDB(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlthuvien";
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($conn, 'utf8mb4');
        if($conn -> connect_error) {
            die("Kết nối không thành công: ".$conn -> connect_error);
        };
        return $conn;
    }
// lấy sách
    function getBook($conn) {
        $sql = "select * from sach";
        return mysqli_query($conn , $sql);
    }
// lấy chi tiết sách theo id (mã sách)
    function getCTS($conn, $id) {
        $sql = "select * from sach where maSach='$id'";
        return mysqli_query($conn, $sql);
    }
// lấy danh sách theo thể loại ()
    function getCate($conn , $theloai) {
        $sql = "select * from sach where theLoai LIKE '$theloai'";
        return mysqli_query($conn, $sql);
    }
?>