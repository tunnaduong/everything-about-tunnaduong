@extends('layout.main')

@section('title', 'Những người đã gặp')

@section('content')
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="." class="no-color">
                        Những người đã gặp
                    </a>
                    <div class="people-filters">
                        <label class="people-sort">
                        <i class="fas fa-chevron-down" style="font-size: 13px;"></i>
                        <select id="people-sort" class="people-filter">
                            <option value="recent" {{ ($sort ?? 'recent') === 'recent' ? 'selected' : '' }}>Gần đây nhất</option>
                            <option value="oldest" {{ ($sort ?? 'recent') === 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
                            <option value="memories_desc" {{ ($sort ?? 'recent') === 'memories_desc' ? 'selected' : '' }}>Nhiều kỷ niệm nhất</option>
                            <option value="memories_zero" {{ ($sort ?? 'recent') === 'memories_zero' ? 'selected' : '' }}>Chưa có kỷ niệm</option>
                            <option value="age_desc" {{ ($sort ?? 'recent') === 'age_desc' ? 'selected' : '' }}>Tuổi lớn đến bé</option>
                            <option value="age_asc" {{ ($sort ?? 'recent') === 'age_asc' ? 'selected' : '' }}>Tuổi bé đến lớn</option>
                        </select>
                        </label>
                        <label class="people-context">
                            <i class="fas fa-chevron-down" style="font-size: 13px;"></i>
                            <select id="people-context" class="people-filter">
                                <option value="all" {{ ($context ?? 'all') === 'all' ? 'selected' : '' }}>Tất cả</option>
                                <option value="school" {{ ($context ?? 'all') === 'school' ? 'selected' : '' }}>Bạn học (Cấp 3/Đại học)</option>
                                <option value="work" {{ ($context ?? 'all') === 'work' ? 'selected' : '' }}>Đồng nghiệp/Công việc</option>
                                <option value="hobby" {{ ($context ?? 'all') === 'hobby' ? 'selected' : '' }}>Cùng sở thích</option>
                            </select>
                        </label>
                    </div>
                </h1>
                <span class="top-bar"><a href="/nhat-ky-hang-ngay" class="no-color">Nhật ký hằng ngày</a></span>
                <span class="top-bar"><a href="/" class="no-color">Podcast mới ra mắt</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                <div class="people-list">
                    @foreach ($people as $person)
                        <div class="person">
                            <a class="no-color" href="/nhung-nguoi-da-gap/{{ $person->slug }}">
                                <img src="{{ $person->avatar }}">
                            </a>
                            <div class="person--detail">
                                <a class="no-color" href="/nhung-nguoi-da-gap/{{ $person->slug }}">
                                    <h2 class="pointer">{{ $person->name }}</h2>
                                </a>
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
    <script>
        function updatePeopleFilters() {
            const sort = document.getElementById('people-sort').value;
            const context = document.getElementById('people-context').value;
            const params = new URLSearchParams(window.location.search);
            params.set('sort', sort);
            params.set('context', context);
            window.location.search = params.toString();
        }

        document.getElementById('people-sort').addEventListener('change', updatePeopleFilters);
        document.getElementById('people-context').addEventListener('change', updatePeopleFilters);
    </script>
@endsection
