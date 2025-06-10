<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\AdditionalAttribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

final class AdditionalAttributeImport implements ToCollection, WithHeadingRow
{
    use Importable;

    /**
     * @param  array  $row
     * @return Model|null
     */
    public ?Category $category = null;

    public function collection(Collection $rows): void
    {
        foreach ($rows as $row) {
            try {
                $this->category = Category::whereName($row['kollekciok'])->first();
                $data = ['category_id' => $this->category->id];

                foreach ($row as $key => $value) {
                    if ($key !== 'kollekciok') {
                        $data[$key] = $value;
                    }
                }

                AdditionalAttribute::create($data);
            } catch (Throwable) {
                dd($row['kollekciok']);
            }
        }
    }
}
