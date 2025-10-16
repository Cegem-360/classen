<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributes\Pages;

use App\Filament\Resources\AdditionalAttributes\AdditionalAttributeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditAdditionalAttribute extends EditRecord
{
    protected static string $resource = AdditionalAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
