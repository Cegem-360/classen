<?php

namespace App\Imports;

use App\Models\MetaKeyWords;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class MetaDataImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $meta =  MetaKeyWords::firstOrCreate(
        [
            'collection_name' => $row['collection_name'],
        ]
        );
        $meta->update([
            'meta_description' => $row['meta_description'],
            'key_words' => $row['key_words']
        ]);

        return $meta;
    }
}
