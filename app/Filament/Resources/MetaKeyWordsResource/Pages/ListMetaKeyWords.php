<?php

namespace App\Filament\Resources\MetaKeyWordsResource\Pages;

use App\Filament\Resources\MetaKeyWordsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetaKeyWords extends ListRecords
{
    protected static string $resource = MetaKeyWordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
