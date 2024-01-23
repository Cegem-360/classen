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
            /*$this->category = Category::whereName($row['Kollekciók'])->first();
            AdditionalAttribute::create([
                'category_id' => $this->category->id(),
                'primo_finishing' => $row['primo_finishing'],
                '3D_finishing' => $row['3D_finishing'],
                'iridium_finishing' => $row['iridium_finishing'],
                'cpl_laminate' => $row['cpl_laminate'],
                'hpl_laminate' => $row['hpl_laminate'],
                'lacquered' => $row['lacquered'],
                'room_door' => $row['room_door'],
                'bathroom_door' => $row['bathroom_door'],
                'interior_entrance_door' => $row['interior_entrance_door'],
                'technical_doors' => $row['technical_doors'],
                'fire_door' => $row['fire_door'],
                'anti-burglary_door' => $row['anti-burglary_door'],
                'soundproof_door' => $row['soundproof_door'],
                'sliding_door' => $row['sliding_door'],
                'modern' => $row['modern'],
                'classic' => $row['classic'],
                'loft' => $row['loft'],
                'retro' => $row['retro'],
                'rustic' => $row['rustic'],
                'width_60' => $row['width_60'],
                'width_70' => $row['width_70'],
                'width_80' => $row['width_80'],
                'width_90' => $row['width_90'],
                'width_100' => $row['width_100'],
                'width_110' => $row['width_110'],
                'width_120' => $row['width_120'],
                'panel_doors' => $row['panel_doors'],
                'framed_doors' => $row['framed_doors'],
            ]);*/
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
