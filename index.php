<?php
    require_once('func.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id = 'header'>
        <ul>    
            <li><h2>THƯ VIỆN ONLINE</h2></li>
            <div id = 'search'>
                <form action="timsach.php" method="get">
                    <input type='text' name = "search" id = 'text_search' placeholder='Tìm kiếm...' required>
                    <input type="submit" id= 'btn_search' value = 'Tìm'>
                </form>
            </div>
            <li><a href="login.php">đăng nhập</a></li>
        </ul>
    </div>
    <div class = 'container'>
        <div class = 'left'>
            <h4>THƯ MỤC</h4>
            <ul>
                <li><a href="?page=dssach">Tất cả sách</a></li>
                <li>
                    <a href="#">Sách theo thể loại</a>
                        <div class = "item_cate">
                            <a href="pages/dssachcate.php?theloai=Tâm lý học">Tâm lý học</a>
                            <a href="pages/dssachcate.php?theloai=Khoa học lịch sử">Khoa học lịch sử</a>
                            <a href="pages/dssachcate.php?theloai=Khoa học viễn tưởng">Khoa học viễn tưởng</a>
                            <a href="pages/dssachcate.php?theloai=Fantasy">Fantasy</a>
                            <a href="pages/dssachcate.php?theloai=Khoa học">Khoa học</a>
                            <a href="pages/dssachcate.php?theloai=Văn học viễn tưởng hài hước">Văn học viễn tưởng hài hước</a>
                        </div>
                </li>
                <li><a href="?page=dkmuonsach">Đăng ký yêu cầu mượn sách</a></li>
                <li><a href="?page=brw_list">Danh sách đang mượn</a></li>
            </ul> 
        </div>
        <div id="main">
        <?php
        if (isset($_GET["page"])){
            switch ($_GET["page"]) {
                default:
                    require('pages/sachhot.php');
                    break;
                case 'dssach':
                    require("pages/dssach.php");
                    break;
                case 'dssachcate':
                    require("pages/dssachcate.php");
                    break;
                case 'dkmuonsach':
                    require("pages/dkmuonsach.php");
                    break;
                case 'brw_list':
                    require("pages/brw_list.php");
                    break;   
               }
            }
        ?>
    </div>
        </div>
    </div>
    <div class ='Footer'></div>
</body>
</html>