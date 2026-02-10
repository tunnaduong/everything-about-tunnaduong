@extends('layout.admin')

@section('title', 'Quản lý nhật ký')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Nhật ký</p>
            <h1>Timeline</h1>
            <p class="admin-sub">Quản lý bài nhật ký hằng ngày từ bảng <strong>everyday.timeline</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin">Về dashboard</a>
            <a class="action primary" href="/admin/timeline/create">Tạo nhật ký</a>
        </div>
    </div>

    <div class="admin-table admin-table--timeline">
        <div class="table-row table-head">
            <div>ID</div>
            <div>Tiêu đề</div>
            <div>Ngày</div>
            <div>Hình</div>
            <div>Hành động</div>
        </div>
        @foreach ($items as $item)
            <div class="table-row">
                <div>#{{ $item->id }}</div>
                <div>{{ $item->title }}</div>
                <div>{{ $item->date }}</div>
                <div>{{ $item->image }}</div>
                <div class="row-actions">
                    <a class="action ghost" href="/admin/timeline/{{ $item->id }}/edit">Sửa</a>
                    <form method="POST" action="/admin/timeline/{{ $item->id }}/delete" onsubmit="return confirm('Xóa nhật ký này?');">
                        <button class="action danger" type="submit">Xóa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
