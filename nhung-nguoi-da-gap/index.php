<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
    ?>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
    ?>
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="." class="no-color">
                        Những người đã gặp
                    </a>
                    <span><i class="fas fa-chevron-down" style="font-size: 13px;"></i> Gần đây nhất</span>
                </h1>
                <span class="top-bar"><a href="/nhat-ky-hang-ngay/" class="no-color">Nhật ký hằng ngày</a></span>
                <span class="top-bar"><a href="/" class="no-color">Bài viết blog</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                <div class="people-list">
                    <div class="list--col">
                        <div class="person">
                            <img src="/static/img/people/haquangthang.png">
                            <div class="person--detail">
                                <h2>Hà Quang Thắng</h2>
                                <span class="meet-time">Quen biết từ 01/2022 - 19 tuổi</span>
                                <span>1 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/lelam.png">
                            <div class="person--detail">
                                <h2>Lê Hoàng Tùng Lâm</h2>
                                <span class="meet-time">Quen biết từ 07/2018 - 19 tuổi</span>
                                <span>1 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/thienhuong.png">
                            <div class="person--detail">
                                <h2>Phạm Thị Thiên Hương</h2>
                                <span class="meet-time">Quen biết từ 07/2018 - 19 tuổi</span>
                                <span>0 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/buihien.png">
                            <div class="person--detail">
                                <h2>Bùi Thu Hiền</h2>
                                <span class="meet-time">Quen biết từ 07/2018 - 19 tuổi</span>
                                <span>0 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                    </div>
                    <div class="list--col">
                        <div class="person">
                            <img src="/static/img/people/thanhcong.png">
                            <div class="person--detail">
                                <h2>Phạm Thành Công</h2>
                                <span class="meet-time">Quen biết từ 05/2022 - 19 tuổi</span>
                                <span>18 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/luongquangthang.png">
                            <div class="person--detail">
                                <h2>Lương Quang Thắng</h2>
                                <span class="meet-time">Quen biết từ 05/2022 - 19 tuổi</span>
                                <span>14 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/phanducmanh.png">
                            <div class="person--detail">
                                <h2>Phan Đức Mạnh</h2>
                                <span class="meet-time">Quen biết từ 05/2022 - 21 tuổi</span>
                                <span>10 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                        <div class="person">
                            <img src="/static/img/people/hongquan.png">
                            <div class="person--detail">
                                <h2>Đỗ Hồng Quân</h2>
                                <span class="meet-time">Quen biết từ 07/2018 - 19 tuổi</span>
                                <span>20 kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
    ?>
    <script src="/static/js/script.js"></script>
</body>