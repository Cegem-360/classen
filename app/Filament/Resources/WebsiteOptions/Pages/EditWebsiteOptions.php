<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptions\Pages;

use App\Filament\Resources\WebsiteOptions\WebsiteOptionsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

final class EditWebsiteOptions extends EditRecord
{
    protected static string $resource = WebsiteOptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
