<div id ='dkmuonsach'>
    <form method="post">
        <h2>Đăng ký mượn sách</h2>
        <label for="maSach">Mã Sách:</label>
        <input type="text" id="maSach" name="maSach" placeholder="Nhập mã sách" required>
        <label for="ngayMuon">Ngày Mượn:</label>
        <input type="date" id="ngaymuon" name="ngaymuon" required>
        <label for="ngaytra">Ngày Trả:</label>
        <input type="date" id="ngaytra" name="ngaytra" required>
        <button type="submit" class ="bt_lg">Mượn Sách</button>
    </form>
</div>
<?php
    require_once('/xampp/htdocs/LTW/func.php');
    $conn = connectDB();
    if (isset($_POST['bt_lg'])){
        $masach = $_POST['maSach'];
        $ngaymuon =  $_POST['ngaymuon'];
        $ngaytra = $_POST['ngaytra'];
        $sql = "INSERT INTO muon(maSach,ngayMuon,ngayTradukien) VALUES ('$masach','$ngaymuon', '$ngaytra')";
        if ($conn->query($sql) === TRUE){
                echo '<script type="text/javascript">';
                echo 'alert("Mượn thành công!");';
                echo 'window.location.href = "index.php";'; 
                echo '</script>';
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }    
    }
    $conn->close();
?>