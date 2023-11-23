<?php
    require_once('/xampp/htdocs/LTW/func.php');
    $conn = connectDB();
    $theloai = isset($_GET['theloai']) ? $_GET['theloai'] : "";
    $sach_theo_theloai = array();
    $result = getCate($conn, $theloai); 
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dssach.css">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bookcate.css">
</head>
<body>
    <div id = 'main'>
        <?php
            if ($result->num_rows > 0) {
                // Hiển thị danh sách sách
                while ($r = $result->fetch_assoc()) {
                    ?>
                    <ul class = "list-book">
                        <a href="sachdetail.php?ids=<?php echo $r['maSach']; ?>">
                        <li><img src="#"></li>
                        <li><h2><?php echo $r['tenSach'] ?></h2></li>
                        <li>tác giả: <?php echo $r['tacGia'] ?></li>
                        <li>Thể loại: <?php echo $r['theLoai'] ?></li>
                        <li>Năm xuất bản: <?php echo $r['namXuatban'] ?></li>
                        <li>Nhà xuất bản: <?php echo $r['nhaXuatban'] ?></li>
                        </a>
                    </ul>
                <?php }
            } else {
                echo '<p>Không có sách trong thể loại này.</p>';
            }
        ?>
    </div>
</body>
</html>