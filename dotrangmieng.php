<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHH-COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding : 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Nunito', sans-serif;
            background-color: rgb(255. 255, 255);
        }
        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(255, 255, 255);
            width: 100%;
        }
        .menu li {
            margin-left: 80px;
            display: inline-block;
            vertical-align: middle;
            color: black;
        }
        .menu li i {
            color: black;
        }
        .search-box button i {
            color: black;
        }
        .menu-link {
            color: black;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .menu-link i {
            margin-right: 10px;
            position: relative;
        }
        .smaller {
            width: 100px;
            height: auto;
        }
        .TuyChon {
            list-style: none;
            padding: 10px;
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: rgb(220, 220, 220);
        }
        .TuyChon li {
            display: inline;
            margin-right: 50px;
            margin-left: 50px;
            color: #fff;
        }
        .TuyChon i {
            margin-right: 10px;
            position: relative;
        }
        .banner1{
            margin-top:10px;
            text-align: center;
        }
        .banner1 img {
            width: 50%;
            border-radius: 10px;
        }
        .grid-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        .grid-item {
            margin-bottom: 30px;
            width: 205px;
            height: 295px;
            background-color: white;
            border-radius: 10px;
            margin-right: 10px;
            margin-left: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .grid-item img{
            padding-top: 5px;
            max-width: 92%;
            max-height: 92%;
            display: block;
            margin: auto;
        }
        .hot{
            position: absolute;
            top:5px;
            left:5px;
        }
        .grid-item h1 {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color:rgb(191,35,49);
        }
        .grid-item p{
            font-size: 15px;
            font-weight: bold;
            position: absolute;
            bottom: 90px;
            left: 15px;
            color:rgb(85,85,85);
        }
        .grid-item h4{
            text-decoration: line-through;
            text-decoration-line: line-through;
            text-decoration-color: #333333;
            text-align: center;
            font-weight: bold;
            position: absolute;
            bottom: 50px;
            left: 15px;
            color:rgb(85,85,85);
        }
        .grid-item h3 {
            font-style: italic;
            position: absolute;
            bottom: 50px;
            left: 120px;
            color:rgb(191,35,49);
        }
        .grid-item input {
            height: 20px;
            position:absolute;
            top: 127px;
            left: 10px;
            border: 0px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }
        .grid-item button {
            position:absolute;
            top: 150px;
            left: 10px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <li>
            <a href="index.php">
                <img src="" class="smaller">
                <h2>ở đây là logo</h2>
            </a>
        </li>
        <div style="margin-right:20px;">
        <li><a class="menu-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Đơn hàng</a></li>
        <li><a class="menu-link" href="login.php"><i class="fas fa-user"></i>Tài khoản</a></li>
        </div>
    </div>
    <div class="TuyChon">
        <li><a class="menu-link" href="index.php"><i class="fa fa-home"></i> Trang Chủ</a></li>
        <li><a class="menu-link" href="doan.php"></i>Đồ ăn</a></li>
        <li><a class="menu-link" href="douong.php"></i>Đồ uống-Đồ giải khát</a></li>
        <li><a class="menu-link" href="doannhe.php"></i>Đồ ăn nhẹ-Đồ ăn nhanh</a></li>
        <li><a class="menu-link" href="dotrangmieng.php"></i>Đồ tráng miệng</a></li>
    </div>
    <div class="banner1">
        <img src="images/072-Vector-Viet-Nam-poeqrc055.jpg" class="banner1-smaller">
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hhh";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT id_dotrangmieng, hinhanh, ten_dotrangmieng, giaban FROM tbl_dotrangmieng";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="grid-container">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="grid-item">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '">';
            echo '<p>' . $row['ten_dotrangmieng'] . '</p>';
            echo '<h4>' . number_format($row["giaban"]) . 'đ</h4>';
            echo '<h3></h3>';
            echo '<h1>' . number_format($row["giaban"] - 5000) . 'đ</h1>';
            echo '<input type="number" name="quantity" min="1" placeholder="Số lượng">';
            echo '<button>Đặt hàng</button>';
            echo '</div>';
            }
        echo '</div>';
    } else {
        echo "Không có dữ liệu.";
    }
    $conn->close();
?>
    <?php
        include("pages/footer.php");
    ?>
</body>
</html>