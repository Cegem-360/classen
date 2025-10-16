<?php

declare(strict_types=1);

namespace App\Filament\Resources\MetaKeyWordsResource\Pages;

use App\Filament\Resources\MetaKeyWordsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListMetaKeyWords extends ListRecords
{
    protected static string $resource = MetaKeyWordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
