<?php

declare(strict_types=1);

namespace App\Filament\Resources\MetaKeyWords\Pages;

use App\Filament\Resources\MetaKeyWords\MetaKeyWordsResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateMetaKeyWords extends CreateRecord
{
    protected static string $resource = MetaKeyWordsResource::class;
}
