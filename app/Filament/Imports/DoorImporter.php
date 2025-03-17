<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Door;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

final class DoorImporter extends Importer
{
    protected static ?string $model = Door::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('product_id')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('price')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('img_url')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('tag')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('tag_name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('tag_img_url')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('tag_category')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('category')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
        ];
    }

    public function resolveRecord(): ?Door
    {
        return Door::firstOrNew([
            'email' => $this->data['email'],
        ]);

        return new Door;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your door import has completed and '.number_format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }
}
