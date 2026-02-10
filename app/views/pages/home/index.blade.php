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
                        <a class=" no-color" href="https://everyday.tunnaduong.com" external target="_blank">
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
                <a href="https://radio.tunnaduong.com" external class="no-color">
                    Podcast<br />mới ra mắt
                </a>
            </h1>
            <div class="section--content">
                @if (isset($_GET['debug']))
                    <div class="content--card">
                        <p class="card--summary">podcasts_count: {{ is_array($podcasts) ? count($podcasts) : 0 }}</p>
                        @if (!empty($podcast_debug))
                            <p class="card--summary" style="white-space: pre-line;">
                                {{ implode('', $podcast_debug) }}
                            </p>
                        @endif
                    </div>
                @endif
                @foreach ($podcasts as $podcast)
                    <div class="content--card"">
                        <a class=" no-color" href=" {{ $podcast->link }}" external target="_blank">
                            <p id="podcast-date-{{ $podcast->id }}" class="card--date">
                                {{ $podcast->pub_date }}
                            </p>
                            <p class="card--summary">{{ $podcast->title }}</p>
                        </a>
                    </div>
                    <script>
                        $("#podcast-date-{{ $podcast->id }}").text(moment('{{ $podcast->pub_date }}').format(
                            'DD/MM/YYYY'));
                    </script>
                @endforeach
            </div>
        </div>
        <div class="main--section-3">
            <h1>
                <a href="/nhung-nguoi-da-gap" class="no-color">
                    Những người<br />đã gặp
                </a>
            </h1>
            <div class="section--content people-i-met">
                @foreach (array_slice($people, 0, 8) as $person)
                    <a href="/nhung-nguoi-da-gap/{{ $person->slug }}" class="people-thumb no-color">
                        <img src="{{ $person->avatar }}" alt="{{ $person->name }}" />
                        <div class="people-details">
                            <img src="{{ $person->avatar }}" alt="{{ $person->name }}" />
                            <div class="details">
                                <p class="details--name">{{ $person->name }}</p>
                                <p class="details--summary">{{ $person->memories_count }} kỉ niệm cùng nhau</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                @if (count($people) > 8)
                    <div id="additional-number" class="pointer" onclick="window.location.href='/nhung-nguoi-da-gap'">
                        +{{ count($people) - 8 }}</div>
                @endif
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
