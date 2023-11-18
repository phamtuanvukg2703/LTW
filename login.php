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
        <form action="act_lg.php" method="post">
            <h2>Đăng nhập</h2>
            <div class ="username">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="usercode" class ="usercode" placeholder="Nhập số điện thoại/email" required>
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
