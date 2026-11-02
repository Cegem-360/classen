<?php

declare(strict_types=1);

namespace App\Filament\Exports;

use App\Models\Category;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Database\Eloquent\Builder;
use Override;

/**
 * Collection price list; the edited file can be loaded back with CategoryPriceImporter.
 */
final class CategoryExporter extends Exporter
{
    protected static ?string $model = Category::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('name')
                ->label('Kollekció'),
            ExportColumn::make('price')
                ->label('Ár')
                ->state(fn (Category $record): int => (int) ($record->doors->pluck('price')->mode()[0] ?? 0)),
        ];
    }

    #[Override]
    public static function modifyQuery(Builder $query): Builder
    {
        return $query->with('doors:id,category_id,price');
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'A kollekció-árlista elkészült, '.number_format($export->successful_rows).' sor exportálva.';

        if (($failedRowsCount = $export->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' sort nem sikerült exportálni.';
        }

        return $body;
    }
}
