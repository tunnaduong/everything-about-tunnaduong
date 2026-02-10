@extends('layout.admin')

@section('title', $item ? 'Sửa person' : 'Thêm person')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">People</p>
            <h1>{{ $item ? 'Sửa person' : 'Thêm person mới' }}</h1>
            <p class="admin-sub">Cập nhật bảng <strong>tunna_everything.people</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin/people">Danh sách</a>
        </div>
    </div>

    <form class="admin-form" method="POST" action="{{ $item ? '/admin/people/' . $item->id . '/edit' : '/admin/people/create' }}">
        <label>
            <span>Tên</span>
            <input type="text" name="name" value="{{ $item->name ?? '' }}" required />
        </label>
        <label>
            <span>Ngày gặp</span>
            <input type="date" name="met_from" value="{{ $item->met_from ?? '' }}" required />
        </label>
        <label>
            <span>Ngày sinh</span>
            <input type="date" name="date_of_birth" value="{{ $item->date_of_birth ?? '' }}" required />
        </label>
        <label>
            <span>Mô tả ngắn</span>
            <textarea name="short_description" rows="4">{{ $item->short_description ?? '' }}</textarea>
        </label>
        <label>
            <span>Giới tính</span>
            <select name="gender">
                <option value="male" {{ ($item->gender ?? '') === 'male' ? 'selected' : '' }}>male</option>
                <option value="female" {{ ($item->gender ?? '') === 'female' ? 'selected' : '' }}>female</option>
            </select>
        </label>
        <label>
            <span>Quan hệ</span>
            <input type="text" name="relationship_status" value="{{ $item->relationship_status ?? 'Bạn bè' }}" />
        </label>
        <label>
            <span>Avatar (URL)</span>
            <input type="text" name="avatar" value="{{ $item->avatar ?? '' }}" />
        </label>
        <label>
            <span>Context group</span>
            <input type="text" name="context_group" value="{{ $item->context_group ?? '' }}" />
        </label>
        <button class="action primary" type="submit">Lưu lại</button>
    </form>
@endsection
