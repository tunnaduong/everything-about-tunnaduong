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
            <h1>
                <a href="https://everyday.tunnaduong.com" class="no-color">
                    Nhật ký hằng ngày
                </a>
            </h1>

            <div class="section--content">

                <div class="content--card">
                    <div class="polygon"></div>
                    <div class="date-dot">
                        <div class="date-dot--inner"></div>
                    </div>
                    <div class="card--date-2">
                        <div class="card--date-hour">
                            <i class="fas fa-clock"></i> 17:15
                        </div>
                        <div class="card--date-calendar">27 Tháng Bảy 2022</div>
                    </div>
                    <a class=" no-color" href="https://everyday.tunnaduong.com" target="_blank">
                        <p class="card--title">
                            Để không bị lãng quên
                        </p>
                        <p class="card--content">Bài viết thứ hai trong ngày hôm nay, đó là về ý tưởng mới của mình. Đại
                            khái là mình sẽ tạo một trang web đơn giản lưu trữ các bài viết tự học và ôn luyện để ôn thi
                            Final Exam cho sinh viên đang học ngành Kỹ thuật phần mềm tại Đại học FPT. Về bản chất thì
                            nó cũng giống các web khác của các anh chị khóa trên như kiểu Thaycacac, Kungfutech,...
                            nhưng mà ngoài chia sẻ những tài liệu ôn luyện, key, đề tự ôn, mình sẽ chia sẻ về quá trình
                            tự ôn luyện để lấy gốc thi Final Exam các môn trong kì mà mình đang học. Trong bối cảnh mà
                            chỉ còn 2 ngày nữa là mình bắt đầu thi PE và hôm sau thi FE môn toán kỹ thuật :))). Web này
                            đang được phát triển tại địa chỉ: https://naominhcungon.github.io. Bao giờ có tiền và
                            website được nhiều người biết đến thì mình sẽ chuyển sang địa chỉ mới có tên miền ngắn gọn
                            hơn :)))</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/js/script.js"></script>
</body>