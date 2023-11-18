<?php
    require_once('/xampp/htdocs/LTW/func.php');
    $conn = connectDB();
    $theloai = isset($_GET['theloai']) ? $_GET['theloai'] : 0;
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
    <link rel="stylesheet" href="../css/theloai.css">
</head>
<body>
    <div id = 'header'>
        <ul>    
            <a href="javascript:history.back()">< Quay lại</a>
            <script>bac</script>
            <li><a href="../index.php">THƯ VIỆN ONLINE</a></li>
        </ul>
    </div>
    <h3 class = 'title'>Sách theo thể loại tìm kiếm:</h3> <br>
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