<?php

namespace App\Filament\Resources\WebsiteOptionsResource\Pages;

use App\Filament\Resources\WebsiteOptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebsiteOptions extends ListRecords
{
    protected static string $resource = WebsiteOptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
