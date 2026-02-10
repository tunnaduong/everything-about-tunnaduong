@extends('layout.admin')

@section('title', $item ? 'Sửa nhật ký' : 'Tạo nhật ký')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Nhật ký</p>
            <h1>{{ $item ? 'Sửa nhật ký' : 'Tạo nhật ký mới' }}</h1>
            <p class="admin-sub">Cập nhật nội dung từ bảng <strong>everyday.timeline</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin/timeline">Danh sách</a>
        </div>
    </div>

    <form class="admin-form" method="POST" action="{{ $item ? '/admin/timeline/' . $item->id . '/edit' : '/admin/timeline/create' }}">
        <label>
            <span>Tiêu đề</span>
            <input type="text" name="title" value="{{ $item->title ?? '' }}" />
        </label>
        <label>
            <span>Nội dung</span>
            <textarea name="content" rows="8">{{ $item->content ?? '' }}</textarea>
        </label>
        <label>
            <span>Ngày</span>
            <input type="datetime-local" name="date" value="{{ $item ? date('Y-m-d\TH:i', strtotime($item->date)) : '' }}" required />
        </label>
        <label>
            <span>Hình ảnh (URL)</span>
            <input type="text" name="image" value="{{ $item->image ?? '' }}" />
        </label>
        <button class="action primary" type="submit">Lưu lại</button>
    </form>
@endsection
