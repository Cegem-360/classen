<div class="container px-8 pb-36 mx-auto">
    <div class="flex items-center">
        <h1 class="text-black font-bold text-2xl mb-8">Blog</h1>
    </div>
    <div class="grid grid-cols-3 sm:grid-cols-1 gap-4 -m-4 -mx-4 -mb-10 -mt-4">
        @foreach ($latestBlogs as $blog)
            <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="group">
                <div class="p-4 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="{{ $blog->title }}" class="object-cover object-center h-full w-full"
                            src="{{ $blog->img_url }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{ $blog->title }}</h2>
                    <p class="text-base leading-relaxed mt-2">
                        {{ Str::limit(strip_tags($blog->content), 150, '...') }}</p>
                    <button
                        class="text-black border-b-3 border-transparent group-hover:border-sarga transition duration-300 font-bold inline-flex items-center mt-3">Elolvasom
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </a>
        @endforeach
    </div>
</div>
