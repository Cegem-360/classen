<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptionsResource\Pages;

use App\Filament\Resources\WebsiteOptionsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

final class ViewWebsiteOptions extends ViewRecord
{
    protected static string $resource = WebsiteOptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
