<div>
    <?php
    require_once('func.php');
    $conn = connectDB();
    $dss = getBook($conn);
    $i = 1;
    while ($r = mysqli_fetch_array($dss)){
    ?>
    <ul class = "list-book">
        <li><img src="#"></li>
        <li><h2><a href="#"><?php echo $r['tenSach'] ?></a></h2></li>
        <li>tác giả: <?php echo $r['tacGia'] ?></li>
        <li>Thể loại: <?php echo $r['theLoai'] ?></li>
        <li>Năm xuất bản: <?php echo $r['namXuatban'] ?></li>
        <li>Nhà xuất bản: <?php echo $r['nhaXuatban'] ?></li>
        <li><a href="#">Xem chi tiết</a></li>
    </ul>
    <?php $i++;
    }
    ?>
</div>