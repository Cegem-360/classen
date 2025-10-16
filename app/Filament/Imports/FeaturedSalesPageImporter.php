<?php

namespace App\Filament\Imports;

use App\Models\FeaturedSalesPage;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class FeaturedSalesPageImporter extends Importer
{
    protected static ?string $model = FeaturedSalesPage::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('title')
                ->rules(['max:255']),
            ImportColumn::make('content'),
            ImportColumn::make('slug')
                ->rules(['max:255']),
            ImportColumn::make('link')
                ->rules(['max:255']),
            ImportColumn::make('featured_media')
                ->rules(['max:255']),
            ImportColumn::make('author')
                ->rules(['max:255']),
            ImportColumn::make('comment_status')
                ->rules(['max:255']),
            ImportColumn::make('ping_status')
                ->rules(['max:255']),
            ImportColumn::make('sticky')
                ->boolean()
                ->rules(['boolean']),
            ImportColumn::make('format')
                ->rules(['max:255']),
            ImportColumn::make('status')
                ->rules(['max:255']),
            ImportColumn::make('type')
                ->rules(['max:255']),
            ImportColumn::make('date')
                ->rules(['datetime']),
            ImportColumn::make('date_gmt')
                ->rules(['datetime']),
            ImportColumn::make('modified')
                ->rules(['datetime']),
            ImportColumn::make('modified_gmt')
                ->rules(['datetime']),
            ImportColumn::make('template')
                ->rules(['max:255']),
            ImportColumn::make('excerpt'),
            ImportColumn::make('guid')
                ->rules(['max:255']),
            ImportColumn::make('meta')
                ->rules(['max:255']),
            ImportColumn::make('categories')
                ->rules(['max:255']),
            ImportColumn::make('tags')
                ->rules(['max:255']),
            ImportColumn::make('seo_title')
                ->rules(['max:255']),
        ];
    }

    public function resolveRecord(): FeaturedSalesPage
    {
        return new FeaturedSalesPage();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your featured sales page import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
