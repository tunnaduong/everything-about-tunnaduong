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
                        <a class=" no-color">
                            <p class="card--title">
                                {{ $diary->title }}
                            </p>
                            <p class="card--content">{!! $diary->content !!}</p>
                            @unless (empty($diary->image))
                                @if (strpos($diary->image, 'http') === false)
                                    <div class="image-placeholder">
                                        <div class="card--image">
                                            <img src="{{ 'https://everyday.tunnaduong.com' . $diary->image }}" />
                                        </div>
                                    </div>
                                @else
                                    <div class="image-placeholder">
                                        <div class="card--image">
                                            <img src="{{ $diary->image }}" />
                                        </div>
                                    </div>
                                @endif
                            @endunless
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
