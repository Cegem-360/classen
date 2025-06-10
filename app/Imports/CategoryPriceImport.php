<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\Category;
use App\Models\Door;
use Exception;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

final class CategoryPriceImport implements ToModel, WithHeadingRow
{
    /**
     * @param  Collection  $collection
     */
    public function model(array $row): void
    {
        try {
            $category = Category::whereName($row['kollekcio'])->first();
            if (! $category) {
                return;
            }
        } catch (Exception) {
            return;
        }

        $models = Door::whereCategoryId(Category::whereName($row['kollekcio'])->first()->id)->get();
        foreach ($models as $model) {
            $model->update([
                'price' => $row['ar'],
            ]);
        }
    }
}
