<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Category;
use App\Models\Door;
use Filament\Actions\Imports\Exceptions\RowImportFailedException;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

/**
 * Sets the price of every door in a collection; expects the columns of the CategoryExporter price list.
 */
final class CategoryPriceImporter extends Importer
{
    protected static ?string $model = Category::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->label('Kollekció')
                ->guess(['Kollekció', 'kollekcio'])
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('price')
                ->label('Ár')
                ->guess(['Ár', 'ar'])
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer', 'min:0'])
                ->fillRecordUsing(fn (): null => null),
        ];
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Az árak importja kész, '.number_format($import->successful_rows).' kollekció ára frissítve.';

        if (($failedRowsCount = $import->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' sort nem sikerült importálni.';
        }

        return $body;
    }

    public function resolveRecord(): Category
    {
        return Category::query()->where('name', $this->data['name'])->first()
            ?? throw new RowImportFailedException("Nincs ilyen kollekció: {$this->data['name']}");
    }

    protected function afterSave(): void
    {
        Door::query()->where('category_id', $this->record->getKey())->update(['price' => $this->data['price']]);
    }
}
