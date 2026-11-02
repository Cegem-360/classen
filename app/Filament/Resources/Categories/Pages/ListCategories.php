<?php

declare(strict_types=1);

namespace App\Filament\Resources\Categories\Pages;

use App\Exports\CategoryPricesExport;
use App\Filament\Resources\Categories\CategoryResource;
use App\Imports\CategoryPriceImport;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use Override;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            Action::make('exportPrices')
                ->label('Árlista letöltése (Excel)')
                ->icon(Heroicon::OutlinedArrowDownTray)
                ->color('gray')
                ->action(fn (): BinaryFileResponse => Excel::download(
                    new CategoryPricesExport(),
                    'kollekcio-arak-'.now()->format('Y-m-d').'.xlsx',
                )),
            Action::make('importPrices')
                ->label('Árak importálása')
                ->icon(Heroicon::OutlinedArrowUpTray)
                ->color('gray')
                ->modalDescription('A kollekció összes ajtójának ára az Excel „Ár” oszlopára áll. Az „Árlista letöltése” fájl formátumát várja.')
                ->schema([
                    FileUpload::make('file')
                        ->label('Excel fájl')
                        ->acceptedFileTypes([
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            'application/vnd.ms-excel',
                        ])
                        ->storeFiles(false)
                        ->required(),
                ])
                ->action(function (array $data): void {
                    /** @var TemporaryUploadedFile $file */
                    $file = $data['file'];
                    $import = new CategoryPriceImport();

                    Excel::import($import, $file);

                    Notification::make()
                        ->title($import->updatedCollections.' kollekció ára frissítve.')
                        ->success()
                        ->send();
                }),
        ];
    }
}
