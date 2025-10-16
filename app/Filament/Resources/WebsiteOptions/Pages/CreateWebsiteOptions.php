<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptions\Pages;

use App\Filament\Resources\WebsiteOptions\WebsiteOptionsResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateWebsiteOptions extends CreateRecord
{
    protected static string $resource = WebsiteOptionsResource::class;
}
