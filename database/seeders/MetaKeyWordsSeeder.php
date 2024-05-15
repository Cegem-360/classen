<?php

namespace Database\Seeders;

use App\Imports\MetaDataImport;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Excel;
class MetaKeyWordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQNDTk6RJWF6YJvtz2-lGvTxo1r_l6HDLsgg3GkMxTW9FlCP4RzUcekFwS1JehRTvfQ2WjIB6NrHohb/pub?output=xlsx';
        $fileContents = file_get_contents($fileUrl);

        $file = fopen(storage_path('app/import/meta_data.xlsx'), 'w');
        fputs($file, $fileContents);
        fclose($file);

        Excel::import(new MetaDataImport, storage_path('app/import/meta_data.xlsx'));
    }
}
