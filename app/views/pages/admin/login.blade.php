@extends('layout.admin')

@section('title', 'Đăng nhập Admin')

@section('content')
    <div class="admin-login">
        <div class="login-card">
            <div class="login-header">
                <span class="brand-mark">TD</span>
                <div>
                    <p class="brand-eyebrow">Admin Access</p>
                    <h1>Đăng nhập quản trị</h1>
                    <p class="login-sub">Dành riêng cho quản trị viên hệ thống Tunna Duong.</p>
                </div>
            </div>

            @if (!empty($error))
                <div class="login-error">{{ $error }}</div>
            @endif

            <form class="login-form" method="POST" action="/admin/login">
                <label>
                    <span>Tên đăng nhập</span>
                    <input type="text" name="username" placeholder="admin" required />
                </label>
                <label>
                    <span>Mật khẩu</span>
                    <input type="password" name="password" placeholder="••••••••" required />
                </label>
                <button class="action primary" type="submit">Đăng nhập</button>
            </form>

            <p class="login-note">Bạn quên mật khẩu? Hãy cập nhật trong <code>env.php</code>.</p>
        </div>
    </div>
@endsection
