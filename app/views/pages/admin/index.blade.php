@extends('layout.admin')

@section('title', 'Admin Center')

@section('content')
    <header class="admin-hero">
        <div class="brand">
            <div class="brand-mark">TD</div>
            <div class="brand-text">
                <span class="brand-eyebrow">Admin Center</span>
                <h1>Quản trị hệ sinh thái nội dung</h1>
                <p>Quản lý bài viết, dự án, kết nối và trải nghiệm người dùng trong một bảng điều khiển thống nhất.</p>
            </div>
        </div>
        <div class="quick-actions">
            <a class="action primary" href="/admin/timeline/create">Tạo nhật ký</a>
            <a class="action ghost" href="/admin/luubut">Duyệt lưu bút</a>
            <a class="action ghost" href="/admin/logout">Đăng xuất</a>
        </div>
    </header>

    <section class="admin-grid">
        <article class="admin-card">
            <div class="card-header">
                <span class="badge">Nội dung</span>
                <h2>Nhật ký & Bài viết</h2>
            </div>
            <p>Kiểm soát lịch xuất bản, chỉnh sửa nội dung, ghim bài nổi bật và lưu bản nháp.</p>
            <div class="card-meta">
                <div>
                    <span class="meta-label">Bài nháp</span>
                    <strong>12</strong>
                </div>
                <div>
                    <span class="meta-label">Đã xuất bản</span>
                    <strong>86</strong>
                </div>
            </div>
            <a class="card-action" href="/admin/timeline">Quản lý nhật ký</a>
        </article>

        <article class="admin-card highlight">
            <div class="card-header">
                <span class="badge">Dự án</span>
                <h2>What I Do</h2>
            </div>
            <p>Phân loại dự án kỹ thuật, thiết kế, phim ảnh và cập nhật trạng thái theo từng giai đoạn.</p>
            <div class="card-meta">
                <div>
                    <span class="meta-label">Đang chạy</span>
                    <strong>5</strong>
                </div>
                <div>
                    <span class="meta-label">Sắp ra mắt</span>
                    <strong>3</strong>
                </div>
            </div>
            <a class="card-action" href="/admin/projects">Quản lý dự án</a>
        </article>

        <article class="admin-card">
            <div class="card-header">
                <span class="badge">Cộng đồng</span>
                <h2>Kết nối & Thư tay</h2>
            </div>
            <p>Theo dõi form liên hệ, phân loại thư tay và trả lời các kết nối mới.</p>
            <div class="card-meta">
                <div>
                    <span class="meta-label">Tin mới</span>
                    <strong>9</strong>
                </div>
                <div>
                    <span class="meta-label">Đã phản hồi</span>
                    <strong>41</strong>
                </div>
            </div>
            <a class="card-action" href="/admin/luubut">Quản lý lưu bút</a>
        </article>

        <article class="admin-card">
            <div class="card-header">
                <span class="badge">Hệ thống</span>
                <h2>Trải nghiệm & Hiệu năng</h2>
            </div>
            <p>Kiểm tra tốc độ tải, tình trạng uptime, màu sắc giao diện và ghi nhận lỗi.</p>
            <div class="card-meta">
                <div>
                    <span class="meta-label">Uptime</span>
                    <strong>99.9%</strong>
                </div>
                <div>
                    <span class="meta-label">Cảnh báo</span>
                    <strong>2</strong>
                </div>
            </div>
            <a class="card-action" href="/admin/people">Quản lý people</a>
        </article>
    </section>

    <section class="admin-stream">
        <div class="stream-header">
            <h3>Dòng hoạt động gần đây</h3>
            <a class="action ghost" href="/admin/luubut">Lọc theo nguồn</a>
        </div>
        <div class="stream">
            <div class="stream-item">
                <span class="stream-dot"></span>
                <div>
                    <strong>Nguyễn Minh</strong> vừa gửi thư tay mới từ form “Viết cho mình”.
                    <span class="stream-time">2 phút trước</span>
                </div>
            </div>
            <div class="stream-item">
                <span class="stream-dot"></span>
                <div>
                    <strong>Dự án Orion</strong> được chuyển trạng thái sang “Sắp ra mắt”.
                    <span class="stream-time">1 giờ trước</span>
                </div>
            </div>
            <div class="stream-item">
                <span class="stream-dot"></span>
                <div>
                    <strong>Nhật ký tuần 6</strong> được ghim lên trang chủ.
                    <span class="stream-time">Hôm qua</span>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-footer">
        <div>
            <h4>Gợi ý nhanh</h4>
            <p>Hãy cập nhật bản giới thiệu mới và kiểm tra các form liên hệ trước khi tuần mới bắt đầu.</p>
        </div>
        <a class="action primary" href="/admin/timeline">Bắt đầu checklist</a>
    </section>
@endsection
