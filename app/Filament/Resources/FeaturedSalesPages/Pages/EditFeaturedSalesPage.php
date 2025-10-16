<?php

declare(strict_types=1);

namespace App\Filament\Resources\FeaturedSalesPages\Pages;

use App\Filament\Resources\FeaturedSalesPages\FeaturedSalesPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

final class EditFeaturedSalesPage extends EditRecord
{
    protected static string $resource = FeaturedSalesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
