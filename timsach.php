<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Sách</title>
    <link rel="stylesheet" href="timsach.css">
</head>
<body>
<?php
include 'conn.php';

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM sach WHERE tenSach LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
}
?>
<h2>Kết quả tìm kiếm : </h2>
<div class = 'rs'>
<?php
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {   
                echo "<li><img src='img/pic.png'></li>";         
                echo "<li>Mã Sách : " . $row['maSach'] . "</li>";
                echo "<li>Tên Sách  : " . $row['tenSach'] . "</li>";
                echo "<li>Thể Loại: " . $row['theLoai'] . "</li>";
                echo "<li>Tác giả: " . $row['tacGia'] . "</li>";
                echo "<li>Năm xuất bản: " . $row['namXuatban'] . "</li>";
                echo "<li>Nhà xuất bản: " . $row['nhaXuatban'] . "</li>";
                echo "<li>Mô tả: " . $row['moTa'] . "</li>";
                echo "<li>======</li>";
            } 
        }
        else 
        {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    } 
?>
</div>
</body>
</html>

