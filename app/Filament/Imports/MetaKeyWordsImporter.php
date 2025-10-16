<?php

namespace App\Filament\Imports;

use App\Models\MetaKeyWords;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class MetaKeyWordsImporter extends Importer
{
    protected static ?string $model = MetaKeyWords::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('collection_name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('meta_description'),
            ImportColumn::make('key_words'),
        ];
    }

    public function resolveRecord(): MetaKeyWords
    {
        return new MetaKeyWords();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your meta key words import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
