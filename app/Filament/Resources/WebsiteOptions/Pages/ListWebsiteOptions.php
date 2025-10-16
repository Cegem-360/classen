<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptions\Pages;

use App\Filament\Resources\WebsiteOptions\WebsiteOptionsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListWebsiteOptions extends ListRecords
{
    protected static string $resource = WebsiteOptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
