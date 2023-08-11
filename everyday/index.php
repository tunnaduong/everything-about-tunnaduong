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
                        <p class="card--summary">Lorem ipsum isdjaspidsapjoidoipjasdpoiasjdpo</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/js/script.js"></script>
</body>