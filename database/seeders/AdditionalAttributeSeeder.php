<?php

namespace Database\Seeders;

use App\Imports\AdditionalAttributeImport;
use Excel;
use Illuminate\Database\Seeder;

class AdditionalAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = storage_path('app/public/arcadiaAdditionalAttributes.csv');

        Excel::import(new AdditionalAttributeImport, $path);
    }
}
