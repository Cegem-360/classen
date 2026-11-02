<?php

declare(strict_types=1);

namespace App\Exports;

use App\Models\Category;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

/**
 * Collection price list for price corrections; the edited file can be loaded back with CategoryPriceImport.
 */
final class CategoryPricesExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
     * @return Collection<int, array{string|null, int}>
     */
    public function collection(): Collection
    {
        return Category::query()
            ->with('doors:id,category_id,price')
            ->orderBy('name')
            ->get()
            ->map(fn (Category $category): array => [
                $category->name,
                (int) ($category->doors->pluck('price')->mode()[0] ?? 0),
            ]);
    }

    /**
     * @return list<string>
     */
    public function headings(): array
    {
        return ['Kollekció', 'Ár'];
    }
}
