@extends('layout.main')

@section('content')
    <div class="flex flex-col md:flex-row items-center justify-center max-w-screen-lg z-10 my-0 mx-auto">
        <div class="md:w-1/2 md:mr-5 order-2 md:order-1 text-center md:text-left">
            <h6
                class="text-tertiary-dark dark:text-secondary-dark text-md lg:text-2xl font-medium mb-2 md:mb-5 transition-all duration-300 text-[var(--black)]">
                Xin chào, mình là</h6>
            <h1
                class="text-primary text-4xl md:text-5xl lg:text-5xl font-bold mb-2 md:mb-5 transition-all duration-300 text-[var(--black)]">
                Dương
                Tùng Anh</h1>
            <p
                class="text-tertiary dark:text-secondary text-sm lg:text-lg mb-8 transition-all duration-300 text-[var(--black)]">
                Mình là kỹ sư phần mềm có hơn nửa năm kinh nghiệm và những sản phẩm mình làm ra đều được đầu tư kỹ lưỡng.
                Mình
                cũng là người năng động trong công việc, không ngừng học hỏi những kỹ năng mới.
            </p>
        </div>
        <div class="w-60 md:w-1/2 order-1 md:order-2 mb-12 md:mb-0">
            <div class="bg-slate-500 rounded-full overflow-hidden border-8 border-secondary-dark">
                <img alt="Avatar" width="540" height="540" class="scale-105 align-top drop-shadow-xl"
                    style="color:transparent" src="/static/img/transparent_tunna.png">
            </div>
        </div>
    </div>
@endsection
