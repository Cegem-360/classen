<?php

declare(strict_types=1);

namespace App\Filament\Exports;

use App\Models\Door;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

final class DoorExportByCategoryExporter extends Exporter
{
    protected static ?string $model = Door::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id'),
            ExportColumn::make('product_id'),
            ExportColumn::make('price'),
            ExportColumn::make('name'),
            ExportColumn::make('img_url'),
            ExportColumn::make('tag'),
            ExportColumn::make('tag_img_url'),
            ExportColumn::make('tag_category'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your door export by category export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if (($failedRowsCount = $export->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
