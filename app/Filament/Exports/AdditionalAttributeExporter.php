<?php

declare(strict_types=1);

namespace App\Filament\Exports;

use App\Models\AdditionalAttribute;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

final class AdditionalAttributeExporter extends Exporter
{
    protected static ?string $model = AdditionalAttribute::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('category.name'),
            ExportColumn::make('primo_finishing'),
            ExportColumn::make('3d_finishing'),
            ExportColumn::make('iridium_finishing'),
            ExportColumn::make('cpl_laminate'),
            ExportColumn::make('hpl_laminate'),
            ExportColumn::make('lacquered'),
            ExportColumn::make('room_door'),
            ExportColumn::make('inner_door'),
            ExportColumn::make('interior_entrance_door'),
            ExportColumn::make('technical_doors'),
            ExportColumn::make('fire_door'),
            ExportColumn::make('anti_burglary_door'),
            ExportColumn::make('soundproof_door'),
            ExportColumn::make('sliding_door'),
            ExportColumn::make('modern'),
            ExportColumn::make('classic'),
            ExportColumn::make('loft'),
            ExportColumn::make('retro'),
            ExportColumn::make('rustic'),
            ExportColumn::make('wood_door'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your additional attribute export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
