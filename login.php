<?php
    require_once('/xampp/htdocs/LTW/conn.php');
    require_once('/xampp/htdocs/LTW/func.php');
    if(isset($_POST['username'])){
        session_start();
        $dt = $_POST['username'];
        $Password = $_POST['password'];
        $result = getpassuser_sdt($conn, $dt);
        mysqli_close($conn);
        if(password_verify($Password, $result['matKhau'])){
            if(session_id() ===''){
                session_start();
            }
            $_SESSION['username'] =$_POST['username'];
            echo '<script type="text/javascript">';
            echo 'alert("Login thành công!");';
            echo '</script>';
            header("location:index.php?page=allbooks");
            exit();
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Đăng nhập không thành công");';
            echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class ="form-main">
        <form method="post">
            <h2>Đăng nhập</h2>
            <div class ="username">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="username" class ="username" placeholder="Nhập số điện thoại/email" required>
            </div>
            <div class = "password">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" class ="password" placeholder="Nhập mật khẩu" required>
            </div>
            <div class ="btn">
                <button type="submit" class ="btn_dn">Đăng nhập</button>
            </div>
            <div class ="">Đăng nhập với tài khoản 
                <a href="">Thủ Thư</a>
            </div>
        </form>
    </div>
</body>
</html>
