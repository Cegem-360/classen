<?php

declare(strict_types=1);

namespace App\Filament\Resources\DoorResource\Pages;

use App\Filament\Resources\DoorResource;
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
