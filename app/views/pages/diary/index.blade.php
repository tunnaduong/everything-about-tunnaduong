@php
    $a = [
        'January' => 'Tháng Một',
        'February' => 'Tháng Hai',
        'March' => 'Tháng Ba',
        'April' => 'Tháng Tư',
        'May' => 'Tháng Năm',
        'June' => 'Tháng Sáu',
        'July' => 'Tháng Bảy',
        'August' => 'Tháng Tám',
        'September' => 'Tháng Chín',
        'October' => 'Tháng Mười',
        'November' => 'Tháng Mười một',
        'December' => 'Tháng Mười hai',
    ];
@endphp
@extends('layout.main')

@section('content')
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="." class="no-color">
                        Nhật ký hằng ngày
                    </a>
                </h1>
                <span class="top-bar"><a href="/" class="no-color">Bài viết blog</a></span>
                <span class="top-bar"><a href="/nhung-nguoi-da-gap" class="no-color">Những người đã gặp</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                @foreach ($diaries as $diary)
                    <div class="content--card mb-30">
                        <div class="polygon"></div>
                        <div class="date-dot">
                            <div class="date-dot--inner"></div>
                        </div>
                        <div class="card--date-2">
                            <div class="card--date-hour">
                                <i class="fas fa-clock"></i> {{ date('H:i', strtotime($diary->date)) }}
                            </div>
                            <div class="card--date-calendar">
                                <span class="d-block">{{ strtr(date('j F', strtotime($diary->date)), $a) }}</span>
                                <span>{{ strtr(date('Y', strtotime($diary->date)), $a) }}</span>
                            </div>
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
