<?php

declare(strict_types=1);

namespace App\Filament\Resources\FeaturedSalesPages\Pages;

use App\Filament\Resources\FeaturedSalesPages\FeaturedSalesPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

final class ViewFeaturedSalesPage extends ViewRecord
{
    protected static string $resource = FeaturedSalesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
