<?php

declare(strict_types=1);

namespace App\Filament\Resources\ColorResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\ColorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

final class EditColor extends EditRecord
{
    protected static string $resource = ColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
