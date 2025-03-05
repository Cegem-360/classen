<?php

namespace App\Filament\Resources\WebsiteOptionsResource\Pages;

use App\Filament\Resources\WebsiteOptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWebsiteOptions extends ViewRecord
{
    protected static string $resource = WebsiteOptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
