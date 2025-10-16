<?php

declare(strict_types=1);

namespace App\Filament\Resources\FeaturedSalesPages\Pages;

use App\Filament\Resources\FeaturedSalesPages\FeaturedSalesPageResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateFeaturedSalesPage extends CreateRecord
{
    protected static string $resource = FeaturedSalesPageResource::class;
}
