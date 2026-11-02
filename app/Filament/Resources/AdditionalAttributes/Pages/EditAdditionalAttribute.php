<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributes\Pages;

use App\Filament\Resources\AdditionalAttributes\AdditionalAttributeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

final class EditAdditionalAttribute extends EditRecord
{
    protected static string $resource = AdditionalAttributeResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
