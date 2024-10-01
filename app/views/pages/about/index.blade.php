@extends('layout.main')

@section('content')
    <div class="px-6 flex flex-col mt-16 md:flex-row items-center justify-center max-w-screen-lg z-10 my-0 mx-auto">
        <div class="md:w-1/2 md:mr-5 order-2 md:order-1 text-center md:text-left">
            <h6
                class="text-tertiary-dark dark:text-secondary-dark text-md lg:text-2xl font-medium mb-2 md:mb-5 text-[var(--black)]">
                Xin chào, mình là</h6>
            <h1 class="text-primary text-4xl md:text-5xl lg:text-5xl font-bold mb-2 md:mb-5 text-[var(--black)]">
                Dương
                Tùng Anh</h1>
            <p class="text-tertiary dark:text-secondary text-sm lg:text-lg mb-8 text-[var(--black)]">
                Mình là kỹ sư phần mềm có hơn nửa năm kinh nghiệm và những sản phẩm mình làm ra đều được đầu tư kỹ lưỡng.
                Mình
                cũng là người năng động trong công việc, không ngừng học hỏi những kỹ năng mới.
            </p>
        </div>
        <div class="w-60 md:w-1/2 order-1 md:order-2 mb-12 md:mb-0">
            <div class="bg-slate-500 rounded-full overflow-hidden border-8 border-secondary-dark">
                <img alt="Avatar" width="540" height="540" class="scale-105 align-top drop-shadow-xl"
                    style="color:transparent" src="/static/img/transparent_tunna.png" alt="A Transparent Tunna">
            </div>
        </div>
    </div>
    <section class="w-full md:mt-0 flex flex-col items-center justify-start">
        <div class="flex px-6 flex-col md:flex-row items-center mb-16 mt-16 justify-center max-w-screen-lg">
            <div class="w-72 md:w-1/3 mb-8 md:mb-0">
                <img src="/static/img/tunna-walking.png" class="rounded-2xl" alt="A Walking Tunna" width="560"
                    height="560">
            </div>
            <div class="md:ml-16 md:w-2/3">
                <h3
                    class="text-[var(--black)] font-light text-3xl tracking-[6px] uppercase relative transition-all duration-300 mb-10 before:absolute before:-bottom-[5px] before:left-0 before:h-[1px] before:content-[''] before:w-[60px] before:bg-[var(--black)] after:absolute after:-bottom-[7px] after:right-0 after:left-[56px] after:w-[6px] after:h-[6px] after:rounded-full after:bg-[var(--black)]">
                    Về bản thân
                </h3>
                <h3 class="text-[var(--black)] text-xl md:text-3xl font-medium mb-6">Kỹ năng</h3>
                <ul class="text-[var(--black)] leading-7 transition-all duration-300 list-disc ml-8">
                    <li><span class="font-bold">Ngôn ngữ lập trình: </span><span>Javascript, PHP, HTML, CSS</span></li>
                    <li><span class="font-bold">Thư viện và framework: </span><span>ReactJS, React Native, TailwindCSS,
                            Laravel, NodeJS, ExpressJS
                    <li><span class="font-bold">Công cụ: </span><span>Git, Github, Nginx, MySQL, Cloudflare
                </ul>
            </div>
        </div>
    </section>
@endsection
