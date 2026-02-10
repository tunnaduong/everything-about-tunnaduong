@extends('layout.admin')

@section('title', 'Quản lý memories')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Memories</p>
            <h1>Danh sách memories</h1>
            <p class="admin-sub">Quản lý bảng <strong>tunna_everything.memories</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin">Về dashboard</a>
            <a class="action primary" href="/admin/memories/create">Thêm memory</a>
        </div>
    </div>

    <div class="admin-table admin-table--memories">
        <div class="table-row table-head">
            <div>ID</div>
            <div>Person</div>
            <div>Tiêu đề</div>
            <div>Thời gian</div>
            <div>Hành động</div>
        </div>
        @foreach ($items as $item)
            <div class="table-row">
                <div>#{{ $item->id }}</div>
                <div>{{ $item->person_name ?? 'N/A' }}</div>
                <div>{{ $item->memory_title }}</div>
                <div>{{ $item->time }}</div>
                <div class="row-actions">
                    <a class="action ghost" href="/admin/memories/{{ $item->id }}/edit">Sửa</a>
                    <form method="POST" action="/admin/memories/{{ $item->id }}/delete" onsubmit="return confirm('Xóa memory này?');">
                        <button class="action danger" type="submit">Xóa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
