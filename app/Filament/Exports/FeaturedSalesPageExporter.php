<?php

namespace App\Filament\Exports;

use App\Models\FeaturedSalesPage;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class FeaturedSalesPageExporter extends Exporter
{
    protected static ?string $model = FeaturedSalesPage::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('title'),
            ExportColumn::make('content'),
            ExportColumn::make('slug'),
            ExportColumn::make('link'),
            ExportColumn::make('featured_media'),
            ExportColumn::make('author'),
            ExportColumn::make('comment_status'),
            ExportColumn::make('ping_status'),
            ExportColumn::make('sticky'),
            ExportColumn::make('format'),
            ExportColumn::make('status'),
            ExportColumn::make('type'),
            ExportColumn::make('date'),
            ExportColumn::make('date_gmt'),
            ExportColumn::make('modified'),
            ExportColumn::make('modified_gmt'),
            ExportColumn::make('template'),
            ExportColumn::make('excerpt'),
            ExportColumn::make('guid'),
            ExportColumn::make('meta'),
            ExportColumn::make('categories'),
            ExportColumn::make('tags'),
            ExportColumn::make('seo_title'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your featured sales page export has completed and ' . Number::format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
