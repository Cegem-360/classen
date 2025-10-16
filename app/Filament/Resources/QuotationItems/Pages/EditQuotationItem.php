<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationItemResource\Pages;

use App\Filament\Resources\QuotationItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditQuotationItem extends EditRecord
{
    protected static string $resource = QuotationItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
