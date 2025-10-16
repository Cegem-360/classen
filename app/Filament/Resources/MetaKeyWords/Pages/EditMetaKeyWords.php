<?php

declare(strict_types=1);

namespace App\Filament\Resources\MetaKeyWords\Pages;

use App\Filament\Resources\MetaKeyWords\MetaKeyWordsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditMetaKeyWords extends EditRecord
{
    protected static string $resource = MetaKeyWordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
