<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\Category;
use App\Models\Door;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

/**
 * Sets the price of every door in a collection from the collection and price columns of CategoryPricesExport.
 */
final class CategoryPriceImport implements ToCollection, WithHeadingRow
{
    public int $updatedCollections = 0;

    /**
     * @param  Collection<int, Collection<string, mixed>>  $rows
     */
    public function collection(Collection $rows): void
    {
        foreach ($rows as $row) {
            if (blank($row['kollekcio'] ?? null) || ! is_numeric($row['ar'] ?? null)) {
                continue;
            }

            $category = Category::query()->where('name', $row['kollekcio'])->first();

            if ($category === null) {
                continue;
            }

            Door::query()->where('category_id', $category->id)->update(['price' => (int) $row['ar']]);
            $this->updatedCollections++;
        }
    }
}
