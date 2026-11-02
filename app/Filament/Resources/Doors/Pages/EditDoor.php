<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors\Pages;

use App\Filament\Resources\Doors\DoorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

final class EditDoor extends EditRecord
{
    protected static string $resource = DoorResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
