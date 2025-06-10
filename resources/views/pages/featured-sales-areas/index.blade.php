@use('App\Models\FeaturedSalesPage')
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kiemelt Értékesítési Területek') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc pl-6 space-y-2">
                        @forelse (FeaturedSalesPage::orderBy('created_at', 'desc')->get() ?? [] as $featuredSalesPage)
                            <li>
                                <a href="{{ route('featured-sales-areas.show', $featuredSalesPage->slug) }}"
                                    class="text-blue-600 hover:underline">
                                    {{ $featuredSalesPage->title }}
                                </a>
                            </li>
                        @empty
                            <li>
                                <p class="text-gray-500">Nincs elérhető kiemelt értékesítési terület.</p>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-footer.layout />
</x-layouts.app>
