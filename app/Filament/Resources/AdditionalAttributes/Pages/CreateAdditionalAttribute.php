<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributes\Pages;

use App\Filament\Resources\AdditionalAttributes\AdditionalAttributeResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAdditionalAttribute extends CreateRecord
{
    protected static string $resource = AdditionalAttributeResource::class;
}
