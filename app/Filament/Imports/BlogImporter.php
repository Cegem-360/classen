<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Blog;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

final class BlogImporter extends Importer
{
    protected static ?string $model = Blog::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('title')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('slug')
                ->rules(['max:255']),
            ImportColumn::make('img_url')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('content')
                ->requiredMapping()
                ->rules(['required']),
        ];
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your blog import has completed and '.number_format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if (($failedRowsCount = $import->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }

    public function resolveRecord(): ?Blog
    {
        return Blog::firstOrNew([
            'slug' => $this->data['slug'],
        ]);

        // return new Blog;
    }
}
