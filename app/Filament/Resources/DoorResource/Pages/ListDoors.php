<?php

declare(strict_types=1);

namespace App\Filament\Resources\DoorResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Exports\DoorExportByCategoryExporter;
use App\Filament\Resources\DoorResource;
use Filament\Actions;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;

final class ListDoors extends ListRecords
{
    protected static string $resource = DoorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ExportAction::make(DoorExportByCategoryExporter::class)
                ->label('Export by Category')
                ->icon('heroicon-o-document'),
        ];
    }
}
