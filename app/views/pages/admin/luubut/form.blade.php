@extends('layout.admin')

@section('title', 'Cập nhật lưu bút')

@section('content')
    <div class="admin-header">
        <div>
            <p class="brand-eyebrow">Lưu bút</p>
            <h1>Chi tiết thư tay</h1>
            <p class="admin-sub">Cập nhật nội dung từ bảng <strong>luubut.luubut</strong>.</p>
        </div>
        <div class="admin-actions">
            <a class="action ghost" href="/admin/luubut">Danh sách</a>
        </div>
    </div>

    <form class="admin-form" method="POST" action="/admin/luubut/{{ $item->id }}/edit">
        <label class="checkbox-row">
            <input type="checkbox" name="isApproved" {{ $item->isApproved ? 'checked' : '' }} />
            <span>Duyệt thư tay</span>
        </label>
        <label>
            <span>Tên</span>
            <input type="text" name="name" value="{{ $item->name }}" required />
        </label>
        <label>
            <span>Email</span>
            <input type="text" name="email" value="{{ $item->email }}" />
        </label>
        <label>
            <span>Đến từ</span>
            <textarea name="comefrom" rows="2">{{ $item->comefrom }}</textarea>
        </label>
        <label>
            <span>Website</span>
            <input type="text" name="web" value="{{ $item->web }}" />
        </label>
        <label>
            <span>Giới tính</span>
            <input type="text" name="gender" value="{{ $item->gender }}" />
        </label>
        <label>
            <span>Đã gặp chưa?</span>
            <input type="text" name="havewemet" value="{{ $item->havewemet }}" />
        </label>
        <label>
            <span>Lý do gặp</span>
            <textarea name="whywemet" rows="3">{{ $item->whywemet }}</textarea>
        </label>
        <label>
            <span>Kỷ niệm</span>
            <textarea name="ourmemory" rows="4">{{ $item->ourmemory }}</textarea>
        </label>
        <label>
            <span>Tôi là</span>
            <textarea name="iam" rows="3">{{ $item->iam }}</textarea>
        </label>
        <label>
            <span>Không thích</span>
            <textarea name="dislike" rows="3">{{ $item->dislike }}</textarea>
        </label>
        <label>
            <span>Vài dòng</span>
            <textarea name="somelines" rows="4">{{ $item->somelines }}</textarea>
        </label>
        <label>
            <span>Chữ ký (data)</span>
            <textarea name="signature_data" rows="4">{{ $item->signature_data }}</textarea>
        </label>
        <button class="action primary" type="submit">Lưu lại</button>
    </form>
@endsection
