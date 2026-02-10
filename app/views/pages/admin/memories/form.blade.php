@extends('layout.admin')

@section('title', $item ? 'Sửa memory' : 'Thêm memory')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Memories</p>
            <h1>{{ $item ? 'Sửa memory' : 'Thêm memory mới' }}</h1>
            <p class="admin-sub">Cập nhật bảng <strong>tunna_everything.memories</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin/memories">Danh sách</a>
        </div>
    </div>

    <form class="admin-form" method="POST" action="{{ $item ? '/admin/memories/' . $item->id . '/edit' : '/admin/memories/create' }}">
        <label>
            <span>Person</span>
            <select name="person_id" required>
                @foreach ($people as $person)
                    <option value="{{ $person->id }}" {{ ($item->person_id ?? '') == $person->id ? 'selected' : '' }}>
                        {{ $person->name }} (#{{ $person->id }})
                    </option>
                @endforeach
            </select>
        </label>
        <label>
            <span>Tiêu đề</span>
            <input type="text" name="memory_title" value="{{ $item->memory_title ?? '' }}" required />
        </label>
        <label>
            <span>Nội dung</span>
            <textarea name="memory_content" rows="5">{{ $item->memory_content ?? '' }}</textarea>
        </label>
        <label>
            <span>Địa điểm</span>
            <input type="text" name="location" value="{{ $item->location ?? '' }}" />
        </label>
        <label>
            <span>Thời gian</span>
            <input type="datetime-local" name="time" value="{{ $item ? date('Y-m-d\TH:i', strtotime($item->time)) : '' }}" required />
        </label>
        <label>
            <span>Cảm xúc</span>
            <input type="text" name="feeling" value="{{ $item->feeling ?? '' }}" />
        </label>
        <label>
            <span>Love</span>
            <input type="number" name="love" value="{{ $item->love ?? 0 }}" min="0" />
        </label>
        <button class="action primary" type="submit">Lưu lại</button>
    </form>
@endsection
