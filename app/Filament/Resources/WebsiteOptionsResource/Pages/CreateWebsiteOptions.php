<?php

declare(strict_types=1);

namespace App\Filament\Resources\WebsiteOptionsResource\Pages;

use App\Filament\Resources\WebsiteOptionsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWebsiteOptions extends CreateRecord
{
    protected static string $resource = WebsiteOptionsResource::class;
}
