<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-png" href="/static/img/tunnaduong.png">
    <title>Tất cả mọi thứ về Tunna Duong</title>
    <link rel="stylesheet" href="./static/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
</head>

<body>
    <!-- Construction badge: <img src="./static/img/under-construction.png" class="under-construction-badge" /> -->
    <center>
        <div id="header">
            <img src="./static/img/tunnaduong.png" alt="Tunna Duong logo" class="logo">
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
                <span class="version-number">Last updated: 23.08.22-20:08</span>
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
    <div class="main">
        <div class="main--section-1">
            <h1>Nhật ký<br>hằng ngày</h1>
            <div class="section--content">
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
            </div>
        </div>
        <div class="main--section-2">
            <h1>Bài viết<br>blog</h1>
            <div class="section--content">
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
                <div class="content--card">
                    <p class="card--date">28/07/2022</p>
                    <p class="card--summary">Để không bị lãng quên</p>
                </div>
            </div>
        </div>
        <div class="main--section-3">
            <h1>Những người<br>đã gặp</h1>
            <div class="section--content people-i-met">
                <div class="people-thumb">
                    <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh">
                    <div class="people-details">
                        <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công">
                    <div class="people-details">
                        <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh">
                    <div class="people-details">
                        <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng">
                    <div class="people-details">
                        <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân">
                    <div class="people-details">
                        <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng">
                    <div class="people-details">
                        <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm">
                    <div class="people-details">
                        <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương">
                    <div class="people-details">
                        <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền">
                    <div class="people-details">
                        <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền">
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div id="additional-number">
                    +26
                </div>
            </div>
        </div>
        <div class="main--section-4">
            <h1>Mọi người nghĩ<br>gì về mình</h1>
            <div class="section--content">
                <div class="content--card card--people">
                    <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm">
                    <div>
                        <p class="people--name">Lê Hoàng Tùng Lâm</p>
                        <p class="people--review">Bạn ơi đừng béo nữa</p>
                    </div>
                </div>
                <div class="content--card card--people">
                    <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương">
                    <div>
                        <p class="people--name">Hương xinh</p>
                        <p class="people--review">Giảm cân đi cậu nhé!</p>
                    </div>
                </div>
                <div class="content--card card--people">
                    <img src="./static/img/people/buihien.png" alt="Bùi Thu Hiền">
                    <div>
                        <p class="people--name">Bùi Thu Hiền</p>
                        <p class="people--review">Chúc đỗ nguyện vọng mong ước, luôn dui dẻ, hạnh phúc với những quyết
                            định của mình nho</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <footer>
            <p class="footer--copyright">
                <span id="footer--mobile">© 2022 Duong Tung Anh<br><span
                        style="color: gray;font-weight: 300;font-size: 15px">All
                        rights
                        reserved</span></span>
                <span id="footer--desktop">© 2022 Duong Tung Anh. All rights reserved.</span>
            </p>
            <p class="footer--fun">Được làm bằng 💕 <i>tình yêu</i>, 🔥 <i>nhiệt huyết</i>, ⌨️ <i>bàn phím</i> và rất
                nhiều ☕️ <i>cà phê</i>.</p>
        </footer>
    </center>
    <script src="./static/js/script.js"></script>
</body>

</html>