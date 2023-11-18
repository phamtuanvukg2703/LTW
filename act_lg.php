<?php
include 'conn.php';

$usercode =$_POST['usercode'];
$password=$_POST['password'];

$sql = "SELECT * FROM bandoc WHERE mabandoc = '$usercode' or email = '$usercode'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['matKhau'])) {
        echo '<script type="text/javascript">';
        echo 'alert("Đăng nhập thành công!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu! ";
    }
} else {
    echo "Sai tên đăng nhập hoặc mật khẩu! ";
}
mysqli_close($conn);

?>