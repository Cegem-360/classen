<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Carbon\CarbonImmutable;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Artisan;
use Override;

final class Maintenance extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static ?string $navigationLabel = 'Karbantartás';

    protected static ?string $title = 'Karbantartás';

    protected static ?int $navigationSort = 100;

    protected string $view = 'filament.pages.maintenance';

    public function sitemapGeneratedAt(): ?CarbonImmutable
    {
        $path = public_path('sitemap.xml');

        return is_file($path) ? CarbonImmutable::createFromTimestamp((int) filemtime($path), config('app.timezone')) : null;
    }

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            Action::make('generateSitemap')
                ->label('Oldaltérkép generálása')
                ->icon(Heroicon::OutlinedMap)
                ->action(function (): void {
                    Artisan::call('sitemap:generate');

                    Notification::make()
                        ->title('Az oldaltérkép elkészült.')
                        ->success()
                        ->send();
                }),
            Action::make('clearCache')
                ->label('Gyorsítótár ürítése')
                ->icon(Heroicon::OutlinedTrash)
                ->color('gray')
                ->requiresConfirmation()
                ->action(function (): void {
                    Artisan::call('optimize:clear');

                    Notification::make()
                        ->title('A gyorsítótár ürítve.')
                        ->success()
                        ->send();
                }),
        ];
    }
}
