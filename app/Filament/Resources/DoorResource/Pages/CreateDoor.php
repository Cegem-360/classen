<?php

declare(strict_types=1);

namespace App\Filament\Resources\DoorResource\Pages;

use App\Filament\Resources\DoorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDoor extends CreateRecord
{
    protected static string $resource = DoorResource::class;
}
