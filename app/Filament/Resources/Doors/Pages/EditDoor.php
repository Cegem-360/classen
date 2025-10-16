<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors\Pages;

use App\Filament\Resources\Doors\DoorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditDoor extends EditRecord
{
    protected static string $resource = DoorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
