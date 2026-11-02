<?php

declare(strict_types=1);

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Exports\CategoryExporter;
use App\Filament\Imports\CategoryPriceImporter;
use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Override;

final class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ExportAction::make()
                ->exporter(CategoryExporter::class)
                ->label('Árlista exportálása')
                ->icon(Heroicon::OutlinedArrowDownTray)
                ->color('gray'),
            ImportAction::make()
                ->importer(CategoryPriceImporter::class)
                ->label('Árak importálása')
                ->icon(Heroicon::OutlinedArrowUpTray)
                ->color('gray'),
        ];
    }
}
