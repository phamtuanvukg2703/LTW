<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - Search</title>
</head>
<body>
    <h2>Search Books by Genre</h2>

    <form action="" method="post">
        <label for="theloai">Select Genre:</label>
        <select name="theloai" id="theloai">
            <option value="psychology">Tâm lý học</option>
            <option value="history-science">Khoa học lịch sử</option>
            <option value="science-fiction">Khoa học viễn tưởng</option>
            <option value="fantasy">Fantasy</option>
            <option value="science">Khoa học</option>
            <option value="CSFL">Văn học viễn tưởng hài hước</option>
        </select>
        <input type="submit" name="search" value="Search">
    </form>

    <?php
    require_once('func.php');
    $conn = connectDB();
    // Handle search
    if (isset($_POST['search'])) {
        $selectedGenre = $_POST['theloai'];

        // Query to get books by genre
        $sql = "SELECT * FROM sach WHERE theLoai = '$selectedGenre'";
        $result = $conn->query($sql);

        // Display search results
        if ($result->num_rows > 0) {
            echo "<h3>Danh sách tìm kiếm:</h3>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['ten']} by {$row['author']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No books found in the selected genre.</p>";
        }
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
