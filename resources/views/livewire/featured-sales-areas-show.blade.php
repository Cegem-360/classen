<div>
    @empty($featuredSalesPage)
        <p class="text-gray-500">Nincs elérhető kiemelt értékesítési terület.</p>
    @else
        <h3 class="font-semibold text-lg text-gray-800">{{ $featuredSalesPage->title }}</h3>
        <div class="mt-2 text-gray-600">{{ $featuredSalesPage->description }}</div>
    @endempty
</div>
