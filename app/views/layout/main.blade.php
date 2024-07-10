<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-png" href="/static/img/tunnaduong.png" />
    <title>Tất cả mọi thứ về Tunna Duong</title>
    <link rel="stylesheet" href="/static/css/style.css" />
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/typed.min.js"></script>
    <script src="/static/js/moment.min.js"></script>
    <script src="https://kit.fontawesome.com/be3d8625b2.js" crossorigin="anonymous"></script>
</head>

<body onclick="">
    <center>
        <div id="header" onclick="location.href = '/'" style="cursor: pointer; width: fit-content">
            <img src="/static/img/tunnaduong.png" alt="Tunna Duong logo" class="logo" />
            <div class="header--secondary-container">
                <span class="header--secondary" id="typed">&nbsp;</span>
            </div>
            <h1 class="header--primary">Tunna Duong</h1>
        </div>
        <!-- The overlay -->
        <div class="overlay-below"></div>
        <div id="myNav" class="overlay">
            <!-- Overlay content -->
            <div class="filter"></div>
            <div class="overlay-content push-up">
                <a href="#">Giới thiệu</a>
                <a href="https://cv.tunnaduong.com">Những thứ mình làm</a>
                <a href="#">Kết nối với mình</a>
                <a href="#">Viết cho mình</a>
                <a href="#">Báo lỗi</a>
                <a href="#">Ủng hộ</a>
                <span class="version-number">Last updated: 10.08.23-20:31</span>
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round">
                            <div class="switch--moon">🌛</div>
                            <div class="switch--sun">🌞</div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="menu-button-container" onclick="toggleNav()">
            <div class="menu-button">
                <div class="menu-button--line"></div>
                <div class="menu-button--line"></div>
                <div class="menu-button--line"></div>
            </div>
            <span>Menu</span>
        </div>
    </center>
    @yield('content')
    <center>
        <footer>
            <p class="footer--copyright">
                <span id="footer--mobile">© 2022-{{ date('Y') }} Duong Tung Anh<br /><span
                        style="color: gray; font-weight: 300; font-size: 15px">All rights reserved</span></span>
                <span id="footer--desktop">© 2022-{{ date('Y') }} Duong Tung Anh. All rights reserved.</span>
            </p>
            <p class="footer--fun">
                Được làm bằng 💕 <i>tình yêu</i>, 🔥 <i>nhiệt huyết</i>, ⌨️
                <i>bàn phím</i> và rất nhiều ☕️ <i>cà phê</i>.
            </p>
        </footer>
    </center>
    <script src="/static/js/script.js"></script>
</body>

</html>
