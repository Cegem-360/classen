<?php

declare(strict_types=1);

namespace App\Filament\Resources\MetaKeyWordsResource\Pages;

use App\Filament\Resources\MetaKeyWordsResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateMetaKeyWords extends CreateRecord
{
    protected static string $resource = MetaKeyWordsResource::class;
}
