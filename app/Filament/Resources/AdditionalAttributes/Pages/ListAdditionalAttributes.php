<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributes\Pages;

use App\Filament\Resources\AdditionalAttributes\AdditionalAttributeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListAdditionalAttributes extends ListRecords
{
    protected static string $resource = AdditionalAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
