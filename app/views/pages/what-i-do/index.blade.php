@extends('layout.main')

@section('content')
    <section class="w-full mt-6 px-6 md:px-8 mb-16">
        <div class="max-w-screen-lg m-auto">
            <h3
                class="text-[var(--black)] font-light text-3xl tracking-[6px] uppercase relative transition-all duration-300 mb-10 before:absolute before:-bottom-[5px] before:left-0 before:h-[1px] before:content-[''] before:w-[60px] before:bg-[var(--black)] after:absolute after:-bottom-[7px] after:right-0 after:left-[56px] after:w-[6px] after:h-[6px] after:rounded-full after:bg-[var(--black)]">
                Dự án gần đây
            </h3>
        </div>
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($projects as $project)
                    <div class="bg-[var(--content-bg)] transition-all duration-300 flex flex-col gap-2 overflow-hidden">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->name }}" class="aspect-video object-cover">
                        <div class="p-4 flex flex-col gap-2 justify-between h-full">
                            <div>
                                <h2 class="font-semibold text-lg line-clamp-2 text-[var(--black)]">{{ $project->name }}
                                </h2>
                                <p
                                    class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                    {{ date('m/Y', strtotime($project->created_at)) }}</p>
                                <p class="text-[var(--black)]">{{ $project->description }}
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <button href="/projects/{{ $project->project_id }}"
                                    class="text-[var(--black)] flex items-center group">Xem
                                    chi
                                    tiết<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 256 512"
                                        class="text-lg group-hover:translate-x-1 transition-all duration-100" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
