<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributeResource\Pages;

use App\Filament\Resources\AdditionalAttributeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdditionalAttribute extends CreateRecord
{
    protected static string $resource = AdditionalAttributeResource::class;
}
