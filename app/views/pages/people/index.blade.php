@extends('layout.main')

@section('content')
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="." class="no-color">
                        Những người đã gặp
                    </a>
                    <span><i class="fas fa-chevron-down" style="font-size: 13px;"></i> Gần đây nhất</span>
                </h1>
                <span class="top-bar"><a href="/nhat-ky-hang-ngay" class="no-color">Nhật ký hằng ngày</a></span>
                <span class="top-bar"><a href="/" class="no-color">Bài viết blog</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                <div class="people-list">
                    @foreach ($people as $person)
                        <div class="person">
                            <img src="{{ $person->avatar }}">
                            <div class="person--detail">
                                <h2 class="pointer">{{ $person->name }}</h2>
                                <span class="meet-time">Quen biết từ
                                    {{ date_format(date_create($person->met_from), 'm/Y') }} -
                                    {{ DateTime::createFromFormat('Y-m-d', $person->date_of_birth, new DateTimeZone('Asia/Ho_Chi_Minh'))->diff(new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh')))->y }}
                                    tuổi</span>
                                <span>{{ $person->memories_count }} kỷ niệm cùng nhau</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
