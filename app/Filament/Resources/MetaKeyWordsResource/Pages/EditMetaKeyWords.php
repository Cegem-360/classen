<?php

declare(strict_types=1);

namespace App\Filament\Resources\MetaKeyWordsResource\Pages;

use App\Filament\Resources\MetaKeyWordsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

final class EditMetaKeyWords extends EditRecord
{
    protected static string $resource = MetaKeyWordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
