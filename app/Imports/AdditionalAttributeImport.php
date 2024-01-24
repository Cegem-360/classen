<?php

namespace App\Imports;

use App\Models\Category;
use Illuminate\Support\Collection;
use App\Models\AdditionalAttribute;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AdditionalAttributeImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public ?Category $category;
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                $this->category = Category::whereName($row['kollekciok'])->first();
                $data = ['category_id' => $this->category->id];

                foreach ($row as $key => $value) {
                    if ($key != 'kollekciok')
                        $data[$key] = $value;
                }

                AdditionalAttribute::create($data);
            } catch (\Throwable $th) {
                dd($row['kollekciok']);
            }
        }
    }
}
