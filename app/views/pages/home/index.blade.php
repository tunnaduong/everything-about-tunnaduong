@extends('layout.main')

@section('content')
    <div class="main">
        <div class="main--section-1">
            <h1>
                <a href="/nhat-ky-hang-ngay" class="no-color">
                    Nhật ký<br />hằng ngày
                </a>
            </h1>
            <div class="section--content">
                @foreach ($diaries as $diary)
                    <div class="content--card">
                        <a class=" no-color" href="https://everyday.tunnaduong.com" target="_blank">
                            <p id="everyday-date-{{ $diary->id }}" class="card--date">
                                {{ $diary->date }}
                            </p>
                            <p class="card--summary">{{ $diary->title }}</p>
                        </a>
                    </div>
                    <script>
                        $("#everyday-date-{{ $diary->id }}").text(moment('{{ $diary->date }}').format(
                            'DD/MM/YYYY'));
                    </script>
                @endforeach
            </div>
        </div>
        <div class="main--section-2">
            <h1>
                <a href="https://blog.tunnaduong.com" class="no-color">
                    Bài viết<br />blog
                </a>
            </h1>
            <div class="section--content">
                @foreach ($blog_posts as $post)
                    <div class="content--card"">
                        <a class=" no-color" href=" {{ $post->guid }}" target="_blank">
                            <p id="blog-date-{{ $post->ID }}" class="card--date">
                                {{ $post->post_date }}
                            </p>
                            <p class="card--summary">{{ $post->post_title }}</p>
                        </a>
                    </div>
                    <script>
                        $("#blog-date-{{ $post->ID }}").text(moment('{{ $post->post_date }}').format(
                            'DD/MM/YYYY'));
                    </script>
                @endforeach
            </div>
        </div>
        <div class="main--section-3">
            <h1>
                <a href="/nhung-nguoi-da-gap/" class="no-color">
                    Những người<br />đã gặp
                </a>
            </h1>
            <div class="section--content people-i-met">
                <div class="people-thumb">
                    <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh" />
                    <div class="people-details">
                        <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công" />
                    <div class="people-details">
                        <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh" />
                    <div class="people-details">
                        <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng" />
                    <div class="people-details">
                        <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân" />
                    <div class="people-details">
                        <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng" />
                    <div class="people-details">
                        <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
                    <div class="people-details">
                        <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
                    <div class="people-details">
                        <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div class="people-thumb">
                    <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền" />
                    <div class="people-details">
                        <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền" />
                        <div class="details">
                            <p class="details--name">Ngô Nguyễn Thảo Linh</p>
                            <p class="details--summary">3 kỉ niệm cùng nhau</p>
                        </div>
                    </div>
                </div>
                <div id="additional-number">+26</div>
            </div>
        </div>
        <div class="main--section-4">
            <h1>Mọi người nghĩ<br />gì về mình</h1>
            <div class="section--content">
                <div class="content--card card--people">
                    <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
                    <div>
                        <p class="people--name">Lê Hoàng Tùng Lâm</p>
                        <p class="people--review">Bạn ơi đừng béo nữa</p>
                    </div>
                </div>
                <div class="content--card card--people">
                    <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
                    <div>
                        <p class="people--name">Hương xinh</p>
                        <p class="people--review">Giảm cân đi cậu nhé!</p>
                    </div>
                </div>
                <div class="content--card card--people">
                    <img src="./static/img/people/buihien.png" alt="Bùi Thu Hiền" />
                    <div>
                        <p class="people--name">Bùi Thu Hiền</p>
                        <p class="people--review">
                            Chúc đỗ nguyện vọng mong ước, luôn dui dẻ, hạnh phúc với những
                            quyết định của mình nho
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
