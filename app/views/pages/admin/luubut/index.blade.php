@extends('layout.admin')

@section('title', 'Quản lý lưu bút')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Lưu bút</p>
            <h1>Thư tay</h1>
            <p class="admin-sub">Quản lý thư tay từ bảng <strong>luubut.luubut</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin">Về dashboard</a>
        </div>
    </div>

    <div class="admin-table admin-table--luubut">
        <div class="table-row table-head">
            <div>ID</div>
            <div>Người gửi</div>
            <div>Email</div>
            <div>Trạng thái</div>
            <div>Ngày</div>
            <div>Hành động</div>
        </div>
        @foreach ($items as $item)
            <div class="table-row">
                <div>#{{ $item->id }}</div>
                <div>{{ $item->name }}</div>
                <div>{{ $item->email }}</div>
                <div>{{ $item->isApproved ? 'Đã duyệt' : 'Chưa duyệt' }}</div>
                <div>{{ $item->ngaygio }}</div>
                <div class="row-actions">
                    <a class="action ghost" href="/admin/luubut/{{ $item->id }}/edit">Xem/Sửa</a>
                    <form method="POST" action="/admin/luubut/{{ $item->id }}/delete" onsubmit="return confirm('Xóa thư tay này?');">
                        <button class="action danger" type="submit">Xóa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
