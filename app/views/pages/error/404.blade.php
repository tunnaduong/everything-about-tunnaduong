@extends('layout.main')

@section('content')
    <div style="line-height:48px;text-align:center;margin-top: 40px">
        <style>
            .next-error-h1 {
                border-right: 1px solid var(--gray)
            }

            h1,
            h2 {
                color: var(--black);
            }
        </style>
        <h1 class="next-error-h1"
            style="display:inline-block;margin:0 20px 0 0;padding-right:23px;font-size:24px;font-weight:500;vertical-align:top">
            404</h1>
        <div style="display:inline-block">
            <h2 style="font-size:14px;font-weight:400;line-height:28px">Không tìm thấy trang này.</h2>
        </div>
    </div>
@endsection
