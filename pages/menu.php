    <style>
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
    </style>
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