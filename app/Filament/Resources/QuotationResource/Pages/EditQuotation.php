<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\QuotationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

final class EditQuotation extends EditRecord
{
    protected static string $resource = QuotationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
