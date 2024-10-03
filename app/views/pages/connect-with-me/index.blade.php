@extends('layout.main')

@section('content')
    <center class="mt-10">
        <img src="/static/img/tunganh.jpg" width="150" height="150" alt="Tùng Anh" class="rounded-full">
        <h1 class="font-extrabold text-[30px] mt-4">Dương Tùng Anh</h1>
        <p class="max-w-md">Mình là Tùng Anh, tác giả của nhiều thứ. Mình thiết kế và xây dựng website. Mình cũng rất thích
            chơi bóng bàn.
        </p>
        <h3 class="font-medium text-[20px] my-4">Hãy cùng kết nối!</h3>
        <div class="flex flex-col items-center">
            <a href="tel:+84707006421" external id="btn-call" class="social-btn uppercase">
                <i class="fas fa-phone-alt"></i>
                Gọi điện cho mình
            </a>
            <a href="mailto:tunnaduong@gmail.com" external id="btn-gmail" class="social-btn uppercase">
                <i class="fas fa-envelope"></i>
                Gửi mail cho mình
            </a>
            <a href="https://facebook.com/tunna.duong" external id="btn-facebook" class="social-btn uppercase">
                <i class="fab fa-facebook"></i>
                Facebook
            </a>
            <a href="https://instagram.com/tunna.dg" external id="btn-instagram" class="social-btn uppercase">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>
            <a href="https://youtube.com/duongtunganh" external id="btn-youtube" class="social-btn uppercase">
                <i class="fab fa-youtube"></i>
                YouTube
            </a>
            <a href="https://twitter.com/tunnaduong" external id="btn-twitter" class="social-btn uppercase">
                <i class="fab fa-twitter"></i>
                Twitter
            </a>
            <a href="https://github.com/tunna.duong" external id="btn-github" class="social-btn uppercase">
                <i class="fab fa-github"></i>
                GitHub
            </a>
            <a href="https://linkedin.com/in/tunganh03" external id="btn-linkedin" class="social-btn uppercase">
                <i class="fab fa-linkedin"></i>
                LinkedIn
            </a>
        </div>
    </center>
@endsection
