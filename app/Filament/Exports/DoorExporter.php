<?php

declare(strict_types=1);

namespace App\Filament\Exports;

use App\Models\Door;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

final class DoorExporter extends Exporter
{
    protected static ?string $model = Door::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('product_id')
                ->label('Termékkód'),
            ExportColumn::make('name')
                ->label('Megnevezés'),
            ExportColumn::make('category.name')
                ->label('Kollekció'),
            ExportColumn::make('tag_name')
                ->label('Modell'),
            ExportColumn::make('tag_category')
                ->label('Kategória'),
            ExportColumn::make('price')
                ->label('Ár'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Az ajtók exportja elkészült, '.number_format($export->successful_rows).' sor exportálva.';

        if (($failedRowsCount = $export->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' sort nem sikerült exportálni.';
        }

        return $body;
    }
}
