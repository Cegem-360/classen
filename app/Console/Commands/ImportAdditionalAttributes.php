<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Imports\AdditionalAttributeImport;
use Excel;
use Illuminate\Console\Command;

final class ImportAdditionalAttributes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from Excel file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = storage_path('app/public/arcadiaAdditionalAttributes.csv');

        Excel::import(new AdditionalAttributeImport, $path);

        $this->info('Data imported successfully.');
    }
}
