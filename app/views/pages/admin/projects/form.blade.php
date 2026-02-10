@extends('layout.admin')

@section('title', $item ? 'Sửa dự án' : 'Tạo dự án')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Dự án</p>
            <h1>{{ $item ? 'Sửa dự án' : 'Tạo dự án mới' }}</h1>
            <p class="admin-sub">Cập nhật bảng <strong>tunna_everything.projects</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin/projects">Danh sách</a>
        </div>
    </div>

    <form class="admin-form" method="POST" action="{{ $item ? '/admin/projects/' . $item->project_id . '/edit' : '/admin/projects/create' }}">
        @if (!$item)
            <label>
                <span>Project ID</span>
                <input type="text" name="project_id" value="" required />
            </label>
        @endif
        <label>
            <span>Tên dự án</span>
            <input type="text" name="name" value="{{ $item->name ?? '' }}" required />
        </label>
        <label>
            <span>Ngày tạo</span>
            <input type="date" name="created_at" value="{{ $item->created_at ?? '' }}" required />
        </label>
        <label>
            <span>Mô tả</span>
            <textarea name="description" rows="6">{{ $item->description ?? '' }}</textarea>
        </label>
        <label>
            <span>Vai trò</span>
            <input type="text" name="role" value="{{ $item->role ?? '' }}" />
        </label>
        <label>
            <span>Technologies</span>
            <textarea name="technologies" rows="3">{{ $item->technologies ?? '' }}</textarea>
        </label>
        <label>
            <span>GitHub</span>
            <input type="text" name="github" value="{{ $item->github ?? '' }}" />
        </label>
        <label>
            <span>Live site</span>
            <input type="text" name="live_site" value="{{ $item->live_site ?? '' }}" />
        </label>
        <label>
            <span>Thumbnail</span>
            <input type="text" name="thumbnail" value="{{ $item->thumbnail ?? '' }}" />
        </label>
        <label>
            <span>Type</span>
            <input type="text" name="type" value="{{ $item->type ?? 'IT' }}" />
        </label>
        <label>
            <span>Custom thumbnail HTML</span>
            <textarea name="custom_thumbnail_html" rows="4">{{ $item->custom_thumbnail_html ?? '' }}</textarea>
        </label>
        <button class="action primary" type="submit">Lưu lại</button>
    </form>
@endsection
