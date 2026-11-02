<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\Category;
use App\Models\Door;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

final class CategoryPriceImport implements ToModel, WithHeadingRow
{
    /**
     * @param  array<string, mixed>  $row
     */
    public function model(array $row): ?Model
    {
        try {
            $category = Category::whereName($row['kollekcio'])->first();
            if (! $category) {
                return null;
            }
        } catch (Exception) {
            return null;
        }

        $models = Door::whereCategoryId(Category::whereName($row['kollekcio'])->first()->id)->get();
        foreach ($models as $model) {
            $model->update([
                'price' => $row['ar'],
            ]);
        }

        return null;
    }
}
