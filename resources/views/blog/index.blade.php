<x-layouts.app>

    {{-- blogs --}}
    @foreach ($blogs as $blog)
        @dump($blog)
        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="">{{ __('View Blog') }}</a>
    @endforeach

</x-layouts.app>
