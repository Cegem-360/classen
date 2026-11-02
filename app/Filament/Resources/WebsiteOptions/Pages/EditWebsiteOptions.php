<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptions\Pages;

use App\Filament\Resources\WebsiteOptions\WebsiteOptionsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Override;

final class EditWebsiteOptions extends EditRecord
{
    protected static string $resource = WebsiteOptionsResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
