@extends('layout.main')

@section('content')
    <div class="px-6 mt-10 max-w-screen-md my-0 mx-auto">
        <button onclick="history.back();window.scrollTo({ top: 0, behavior: 'smooth' });"
            class="text-[var(--black)] -ml-1 flex items-center group mb-3">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512"
                class="text-lg group-hover:-translate-x-1 transition-all duration-100 rotate-180" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                </path>
            </svg>
            Quay lại
        </button>
        <h3 class="text-2xl leading-6 text-[var(--black)] font-semibold mb-1">{{ $project->name }}</h3>
        <p class="mb-4 text-sm italic text-[var(--black)]">{{ $project->role }}</p>
        @if (isset($project->custom_thumbnail_html))
            <div class="mb-6"
                style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                {!! $project->custom_thumbnail_html !!}
            </div>
        @else
            <img src="{{ $project->thumbnail }}" alt="{{ $project->name }}"
                class="w-full rounded-3xl border-2 border-[var(--black)] mb-6">
        @endif
        <p class="mb-4 text-[var(--black)]">{{ $project->description }}</p>
        <ul class="list-disc text-[var(--black)]">
            <li class="mb-2 ml-4"><span class="font-semibold">Ngày tạo:
                </span>{{ date('m/Y', strtotime($project->created_at)) }}</li>
            @if (isset($project->technologies))
                <li class="mb-2 ml-4"><span class="font-semibold">Công nghệ sử dụng:
                    </span>{{ $project->technologies }}</li>
            @endif
            @if (isset($project->github))
                <li class="mb-2 ml-4"><span class="font-semibold">GitHub:
                    </span><a href="{{ $project->github }}" external>{{ $project->github }}</a></li>
            @endif
            @if (isset($project->live_site))
                <li class="mb-2 ml-4"><span class="font-semibold">Demo:
                    </span><a href="{{ $project->live_site }}" external>{{ $project->live_site }}</a></li>
            @endif
        </ul>
    </div>
@endsection
