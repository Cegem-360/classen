<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Imports\AdditionalAttributeImport;
use Excel;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Description('Import data from Excel file')]
#[Signature('import:excel-data')]
final class ImportAdditionalAttributes extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $path = storage_path('app/public/arcadiaAdditionalAttributes.csv');

        Excel::import(new AdditionalAttributeImport, $path);

        $this->info('Data imported successfully.');
    }
}
