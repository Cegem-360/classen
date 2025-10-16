<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors\Pages;

use App\Filament\Resources\Doors\DoorResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateDoor extends CreateRecord
{
    protected static string $resource = DoorResource::class;
}
