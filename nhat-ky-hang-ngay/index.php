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
                        Nhật ký hằng ngày
                    </a>
                </h1>
                <span class="top-bar"><a href="/" class="no-color">Bài viết blog</a></span>
                <span class="top-bar"><a href="/nhung-nguoi-da-gap/" class="no-color">Những người đã gặp</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">

                <div class="content--card">
                    <div class="polygon"></div>
                    <div class="date-dot">
                        <div class="date-dot--inner"></div>
                    </div>
                    <div class="card--date-2">
                        <div class="card--date-hour">
                            <i class="fas fa-clock"></i> 21:12
                        </div>
                        <div class="card--date-calendar">27 Tháng Bảy 2022</div>
                    </div>
                    <a class=" no-color" href="https://everyday.tunnaduong.com" target="_blank">
                        <p class="card--title">
                            Một ý tưởng hay
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

                <div class="content--card">
                    <div class="polygon"></div>
                    <div class="date-dot">
                        <div class="date-dot--inner"></div>
                    </div>
                    <div class="card--date-2">
                        <div class="card--date-hour">
                            <i class="fas fa-clock"></i> 17:08
                        </div>
                        <div class="card--date-calendar">27 Tháng Bảy 2022</div>
                    </div>
                    <a class=" no-color" href="https://everyday.tunnaduong.com" target="_blank">
                        <p class="card--title">
                            Để không bị lãng quên
                        </p>
                        <p class="card--content">Xin chào, lâu lắm rồi mình mới đụng đến website này. Thực sự thì trong cuộc sống hằng ngày của mình có rất nhiều lúc mình rảnh rỗi. Tuy nhiên những lúc đó mình thường tự nghĩ ra những thứ linh tinh về lập trình để làm. Và cũng vì thế nên dù mình rảnh thật nhưng thời gian đó thường là mình sẽ tập trung để làm những thứ đó. Vì vậy nên mình hay bị kiểu bỏ dở một việc mình từng cho là nên làm trước đó. Và việc viết nhật ký hằng ngày trên web này là một việc như vậy. Thật sự thì có những lúc mình có hứng thú và suy nghĩ sâu xa để viết lách nhưng có những lúc mình cần một thời gian để tập trung vào làm những dự án cá nhân. Hôm nay là một ngày như vậy. Tuy nhiên, mình bỗng nảy ra ý tưởng cải tiến website này đồng thời gộp lại hai website viết lách chia sẻ của mình thành một. Và mình sẽ lấy tên nó là Life of Tunna, đặt địa chỉ tại https://life.tunnaduong.com. Về mặt ý tưởng, thì mình nghĩ là các tính năng sẽ gồm có: trang timeline các hoạt động của mình trong cuộc đời theo mốc từng ngày hoặc từng tháng, từng năm; trang bài viết chia sẻ cá nhân có các chuyên mục về lập trình và review đồ dùng cá nhân, dịch vụ,...; và quan trọng nhất theo mình nghĩ sẽ là một điểm nhấn cho website nếu có. Đó là tính năng viết về những người mà mình đã gặp trong đời, theo kiểu danh bạ; và cuối cùng là tính năng viết lưu bút, gửi gắm những chia sẻ của mọi người đến mình. Và đó là toàn bộ về ý tưởng của mình trong ngày hôm nay. Hẹn mọi người bài viết mới trong thời gian sớm nhất.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
    ?>
    <script src="/static/js/script.js"></script>
</body>