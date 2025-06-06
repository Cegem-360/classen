<?php

declare(strict_types=1);

namespace App\Filament\Resources\AdditionalAttributeResource\Pages;

use App\Filament\Resources\AdditionalAttributeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdditionalAttributes extends ListRecords
{
    protected static string $resource = AdditionalAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
