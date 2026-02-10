@extends('layout.admin')

@section('title', 'Quản lý dự án')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Dự án</p>
            <h1>Projects</h1>
            <p class="admin-sub">Quản lý bảng <strong>tunna_everything.projects</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin">Về dashboard</a>
            <a class="action primary" href="/admin/projects/create">Tạo dự án</a>
        </div>
    </div>

    <div class="admin-table admin-table--projects">
        <div class="table-row table-head">
            <div>ID</div>
            <div>Tên</div>
            <div>Type</div>
            <div>Ngày tạo</div>
            <div>Hành động</div>
        </div>
        @foreach ($items as $item)
            <div class="table-row">
                <div>{{ $item->project_id }}</div>
                <div>{{ $item->name }}</div>
                <div>{{ $item->type }}</div>
                <div>{{ $item->created_at }}</div>
                <div class="row-actions">
                    <a class="action ghost" href="/admin/projects/{{ $item->project_id }}/edit">Sửa</a>
                    <form method="POST" action="/admin/projects/{{ $item->project_id }}/delete" onsubmit="return confirm('Xóa dự án này?');">
                        <button class="action danger" type="submit">Xóa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
