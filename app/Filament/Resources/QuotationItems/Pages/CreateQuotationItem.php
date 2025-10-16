<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationItems\Pages;

use App\Filament\Resources\QuotationItems\QuotationItemResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateQuotationItem extends CreateRecord
{
    protected static string $resource = QuotationItemResource::class;
}
