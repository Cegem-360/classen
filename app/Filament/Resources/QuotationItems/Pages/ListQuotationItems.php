<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationItemResource\Pages;

use App\Filament\Resources\QuotationItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListQuotationItems extends ListRecords
{
    protected static string $resource = QuotationItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
