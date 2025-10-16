<?php

declare(strict_types=1);

namespace App\Filament\Resources\FeaturedSalesPageResource\Pages;

use App\Filament\Resources\FeaturedSalesPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListFeaturedSalesPages extends ListRecords
{
    protected static string $resource = FeaturedSalesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
