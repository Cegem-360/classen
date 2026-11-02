<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors\Pages;

use App\Filament\Exports\DoorExportByCategoryExporter;
use App\Filament\Resources\Doors\DoorResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Override;

final class ListDoors extends ListRecords
{
    protected static string $resource = DoorResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ExportAction::make(DoorExportByCategoryExporter::class)
                ->label('Export by Category')
                ->icon(Heroicon::OutlinedDocument),
        ];
    }
}
