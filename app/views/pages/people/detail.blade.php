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

@section('title', $person->name)

@section('content')
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="/nhung-nguoi-da-gap" class="no-color">
                        Những người đã gặp
                    </a>
                </h1>
                <span class="top-bar"><a href="/nhat-ky-hang-ngay" class="no-color">Nhật ký hằng ngày</a></span>
                <span class="top-bar"><a href="/" class="no-color">Podcast mới ra mắt</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                <div class="person-header">
                    <img class="person-avatar" src="{{ $person->avatar }}" alt="{{ $person->name }}">
                    <div class="person-header__info">
                        <div class="person-name">{{ $person->name }}</div>
                        <div class="person-meta">
                            Quen biết từ {{ date_format(date_create($person->met_from), 'm/Y') }} -
                            {{ DateTime::createFromFormat('Y-m-d', $person->date_of_birth, new DateTimeZone('Asia/Ho_Chi_Minh'))->diff(new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh')))->y }}
                            tuổi
                        </div>
                        <div class="person-meta">{{ count($memories) }} kỷ niệm cùng nhau</div>
                    </div>
                </div>

                <div class="person-memories">
                    @foreach ($memories as $memory)
                        <div class="person-memory">
                            <div class="card--date-2">
                                <div class="card--date-hour">
                                    <i class="fas fa-clock"></i> {{ date('H:i', strtotime($memory->time)) }}
                                </div>
                                <div class="card--date-calendar">
                                    <span class="d-block">{{ strtr(date('j F', strtotime($memory->time)), $a) }}</span>
                                    <span>{{ strtr(date('Y', strtotime($memory->time)), $a) }}</span>
                                </div>
                            </div>
                            <div class="polygon"></div>
                            <div class="date-dot">
                                <div class="date-dot--inner"></div>
                            </div>
                            <div class="content--card">
                                <p class="card--title">{{ $memory->memory_title }}</p>
                                <p class="card--content">{{ $memory->memory_content }}</p>
                            </div>
                        </div>
                    @endforeach
                    @if (count($memories) === 0)
                        <div class="content--card">
                            <p class="card--summary">Chưa có kỷ niệm nào.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
