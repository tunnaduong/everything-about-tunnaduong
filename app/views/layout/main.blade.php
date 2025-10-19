<!DOCTYPE html>
<html lang="en">
@php
    $rel = isset($_GET['rel']) ? $_GET['rel'] : null;
@endphp
@if ($rel != 'page')

    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-8KH78J0G18"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-8KH78J0G18');
        </script>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-png" href="/static/img/tunnaduong.png" />
        <title>@yield('title', 'Tất cả mọi thứ về Tunna Duong')</title>
        <link rel="stylesheet" href="/static/css/style.css" />
        <script src="/static/js/jquery.min.js"></script>
        <script src="/static/js/typed.min.js"></script>
        <script src="/static/js/moment.min.js"></script>
        <script src="/static/js/nprogress.js"></script>
        <link rel='stylesheet' href='/static/css/nprogress.css' />
        <script src="https://kit.fontawesome.com/be3d8625b2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class'
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3425905751761094"
            crossorigin="anonymous"></script>
    </head>
@endif

<body onclick="">
    @if ($rel != 'page')
        <!-- Construction badge: <img src="./static/img/under-construction.png" class="under-construction-badge" /> -->
        <img src="/static/img/under-construction.png" class="under-construction-badge" alt="Under construction badge"
            title="Bạn muốn góp ý cho website? Bấm vào ảnh nhé..." />
        <!-- Popup alert showing Figma design -->
        <div id="floating-footer-alert">
            <span id="alert-close-btn">&times;</span>
            <h3>👋 Xin chào đằng ấy!</h3>
            <p>
                Trang web hiện tại vẫn đang được phát triển và hoàn thiện. Tuy nhiên bạn
                cũng có thể xem qua bản thiết kế của trang web này tại:
                <a href="https://www.figma.com/file/cHrOJ4ASoJUWielefafzzC/Life-Of-Tunna" target="_blank"
                    external>Figma</a>
                để dễ hình dung. Và nếu có thể thì cho mình xin một feedback qua trang
                <a href="https://forms.gle/BduoqJsY6FLxKzxv7" target="_blank" external>Google Forms</a>
                nho nhỏ này nhé! ❤️
            </p>
        </div>
        <center>
            <div id="header" href="/" hide-nav style="cursor: pointer; width: 400px;">
                <img src="/static/img/tunnaduong.png" alt="Tunna Duong logo" class="logo" />
                <div class="header--secondary-container">
                    <span class="header--secondary" id="typed">&nbsp;</span>
                </div>
                <h1 class="header--primary pointer">Tunna Duong</h1>
            </div>
            <!-- The overlay -->
            <div class="overlay-below"></div>
            <div id="myNav" class="overlay">
                <!-- Overlay content -->
                <div class="filter"></div>
                <div class="overlay-content push-up">
                    <a href="/about" hide-nav>Giới thiệu</a>
                    <a href="/what-i-do" hide-nav>Những thứ mình làm</a>
                    <a href="/connect-with-me" hide-nav>Kết nối với mình</a>
                    <a href="/write-for-me" hide-nav>Viết cho mình</a>
                    <a href="https://forms.gle/qjv83iVfTey5zVTg7" external hide-nav>Báo lỗi</a>
                    <a href="https://c4k60.com/sponsors" external hide-nav>Ủng hộ</a>
                    <span class="version-number">Last updated: <span id="last_updated">October 2024</span></span>
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
        <div id="root">
    @endif

    @yield('content')

    @if ($rel != 'page')
        </div>
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
    @endif

    @stack('scripts')
</body>

</html>
