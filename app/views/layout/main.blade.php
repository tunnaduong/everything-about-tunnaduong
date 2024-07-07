<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-main">
                <ul class="menu">
                    <li><a href="">Quản lý danh mục</a></li>
                    <li><a href="">Quản lý sản phẩm</a></li>
                </ul>
            </div>
        </header>
        <section class="content">
            @yield('content')
        </section>
        <footer>
            <span>FPT POLYTECHNIC</span>
        </footer>
    </div>
</body>
</html>