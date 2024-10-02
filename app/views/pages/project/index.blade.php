@extends('layout.main')

@section('content')
    <div class="px-6 mt-10 max-w-screen-md my-0 mx-auto">
        <h3 class="text-2xl leading-6 text-[var(--black)] font-semibold mb-1">{{ $project->name }}</h3>
        <p class="mb-4 text-sm italic text-[var(--black)]">{{ $project->role }}</p>
        <img src="{{ $project->thumbnail }}" alt="{{ $project->name }}"
            class="w-full rounded-3xl border-2 border-[var(--black)] mb-6">
        <p class="mb-4 text-[var(--black)]">{{ $project->description }}</p>
        <ul class="list-disc text-[var(--black)]">
            <li class="mb-2 ml-4"><span class="font-semibold">Ngày tạo:
                </span>{{ date('m/Y', strtotime($project->created_at)) }}</li>
            <li class="mb-2 ml-4"><span class="font-semibold">Công nghệ sử dụng:
                </span>{{ $project->technologies }}</li>
            @if (isset($project->github))
                <li class="mb-2 ml-4"><span class="font-semibold">GitHub:
                    </span><a href="{{ $project->github }}">{{ $project->github }}</a></li>
            @endif
            @if (isset($project->live_site))
                <li class="mb-2 ml-4"><span class="font-semibold">Demo:
                    </span><a href="{{ $project->live_site }}">{{ $project->live_site }}</a></li>
            @endif
        </ul>
    </div>
@endsection
