<x-layouts.app>
    <style>
        h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.25rem;
            line-height: 1.75rem;
            margin-bottom: 1rem;
        }

        strong {
            font-weight: 700;
        }
    </style>

    @isset($blog)
        {{-- <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full md:w-2/3">
                    <img src="{{ asset('storage/blog/images/' . $blog?->img_url) }}" alt="{{ $blog?->title }}"
                        class="w-full h-64 object-cover object-center rounded-lg">
                    <h1 class="text-3xl font-bold mb-4">{{ $blog?->title }}</h1>
                    <p class="text-lg leading-relaxed">{{ $blog?->body }}</p>
                </div>
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <div class="card-body">
                            <h5 class="text-xl font-semibold mb-2">Content</h5>
                            <p class="text-base">{{ $blog?->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="mx-auto space-y-24">
            <x-hero-component image="{{ $blog?->img_url }}" title="{{ $blog?->title }}" height="h-[28rem]" width="w-full" />
            <div class="container px-8 mx-auto">
                <div class="grid grid-cols-2 sm:grid-cols-1 gap-8 mb-16">
                    {{-- <h1 class="gap-40 my-11">{{ $blog?->title }}</h1> --}}
                    <div>{!! str($blog?->content)->sanitizeHtml() !!}</div>
                    {{-- <div>{{ $blog?->content }}</div> --}}
                    <img src="{{ Vite::asset('resources/img/' . $blog?->img_url) }}" alt="{{ $blog?->title }}"
                        class="sm:order-1 w-fit object-cover aspect-4/3">
                </div>

            </div>
        </div>
    @endisset
    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <div class="container mx-auto px-4">
        <a wire:navigate href="{{ route('blog') }}"
            class="block px-6 py-3 mt-6 text-lg font-bold w-fit bg-neutral-200 ">
            &larr; Vissza a blogokhoz
        </a>
    </div>

    <x-footer.layout />
</x-layouts.app>
