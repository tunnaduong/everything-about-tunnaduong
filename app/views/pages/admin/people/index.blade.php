@extends('layout.admin')

@section('title', 'Quản lý people')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">People</p>
            <h1>Danh sách people</h1>
            <p class="admin-sub">Quản lý bảng <strong>tunna_everything.people</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin">Về dashboard</a>
            <a class="action primary" href="/admin/people/create">Thêm người</a>
        </div>
    </div>

    <div class="admin-table admin-table--people">
        <div class="table-row table-head">
            <div>ID</div>
            <div>Tên</div>
            <div>Met from</div>
            <div>Context</div>
            <div>Hành động</div>
        </div>
        @foreach ($items as $item)
            <div class="table-row">
                <div>#{{ $item->id }}</div>
                <div>{{ $item->name }}</div>
                <div>{{ $item->met_from }}</div>
                <div>{{ $item->context_group }}</div>
                <div class="row-actions">
                    <a class="action ghost" href="/admin/people/{{ $item->id }}/edit">Sửa</a>
                    <form method="POST" action="/admin/people/{{ $item->id }}/delete" onsubmit="return confirm('Xóa người này?');">
                        <button class="action danger" type="submit">Xóa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
