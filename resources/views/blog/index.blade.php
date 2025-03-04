<x-layouts.app>

    {{-- blogs --}}
    <div class="h-20"></div>
    <div class="container px-8 pb-36 mx-auto">
        <div class="flex items-center">
            <h1 class="text-black font-bold text-2xl mb-16">Blog</h1>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-1 gap-4 -m-4 -mx-4 -mb-10 -mt-4">
            @foreach ($blogs as $blog)
                {{-- @dump($blog) --}}

                <div class="p-4 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ $blog->img_url }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">"{{ $blog->title }}</h2>
                    <p class="text-base leading-relaxed mt-2">{{ Str::limit(strip_tags($blog->content), 150, '...') }}
                    </p>
                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"
                        class="text-black font-bold inline-flex items-center mt-3">{{ __('Elolvasom') }}
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
