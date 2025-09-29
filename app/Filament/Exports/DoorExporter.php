<?php

declare(strict_types=1);

namespace App\Filament\Exports;

use App\Models\Door;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Database\Eloquent\Builder;

final class DoorExporter extends Exporter
{
    protected static ?string $model = Door::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('product_id'),
            ExportColumn::make('price'),
            ExportColumn::make('name'),
            ExportColumn::make('img_url'),
            ExportColumn::make('tag'),
            ExportColumn::make('tag_name'),
            ExportColumn::make('tag_img_url'),
            ExportColumn::make('tag_category'),
            ExportColumn::make('category.name')
                ->label('Category Name'),
            ExportColumn::make('category.breadcrumb')
                ->label('Category Breadcrumb'),
            ExportColumn::make('category.img_url')
                ->label('Category Image'),
            // Additional Attributes
            ExportColumn::make('category.additionalAttribute.primo_finishing')
                ->label('Primo Finishing'),
            ExportColumn::make('category.additionalAttribute.3d_finishing')
                ->label('3D Finishing'),
            ExportColumn::make('category.additionalAttribute.iridium_finishing')
                ->label('Iridium Finishing'),
            ExportColumn::make('category.additionalAttribute.cpl_laminate')
                ->label('CPL Laminate'),
            ExportColumn::make('category.additionalAttribute.hpl_laminate')
                ->label('HPL Laminate'),
            ExportColumn::make('category.additionalAttribute.lacquered')
                ->label('Lacquered'),
            ExportColumn::make('category.additionalAttribute.room_door')
                ->label('Room Door'),
            ExportColumn::make('category.additionalAttribute.inner_door')
                ->label('Inner Door'),
            ExportColumn::make('category.additionalAttribute.interior_entrance_door')
                ->label('Interior Entrance Door'),
            ExportColumn::make('category.additionalAttribute.technical_doors')
                ->label('Technical Doors'),
            ExportColumn::make('category.additionalAttribute.fire_door')
                ->label('Fire Door'),
            ExportColumn::make('category.additionalAttribute.anti_burglary_door')
                ->label('Anti Burglary Door'),
            ExportColumn::make('category.additionalAttribute.soundproof_door')
                ->label('Soundproof Door'),
            ExportColumn::make('category.additionalAttribute.sliding_door')
                ->label('Sliding Door'),
            ExportColumn::make('category.additionalAttribute.modern')
                ->label('Modern Style'),
            ExportColumn::make('category.additionalAttribute.classic')
                ->label('Classic Style'),
            ExportColumn::make('category.additionalAttribute.loft')
                ->label('Loft Style'),
            ExportColumn::make('category.additionalAttribute.retro')
                ->label('Retro Style'),
            ExportColumn::make('category.additionalAttribute.rustic')
                ->label('Rustic Style'),
            ExportColumn::make('category.additionalAttribute.wood_door')
                ->label('Wood Door'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function modifyQuery(Builder $query): Builder
    {
        return $query->with(['category.additionalAttribute']);
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your door export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if (($failedRowsCount = $export->getFailedRowsCount()) !== 0) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
