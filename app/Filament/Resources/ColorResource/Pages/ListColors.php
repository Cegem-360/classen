<?php

declare(strict_types=1);

namespace App\Filament\Resources\ColorResource\Pages;

use App\Filament\Resources\ColorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColors extends ListRecords
{
    protected static string $resource = ColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
