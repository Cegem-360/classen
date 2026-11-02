<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors\Pages;

use App\Filament\Resources\Doors\DoorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

final class ListDoors extends ListRecords
{
    protected static string $resource = DoorResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
