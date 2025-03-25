<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationItemResource\Pages;

use App\Filament\Resources\QuotationItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateQuotationItem extends CreateRecord
{
    protected static string $resource = QuotationItemResource::class;
}
